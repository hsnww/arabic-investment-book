#!/bin/bash

# Deployment script for the Investment Book website
# سكريبت النشر لموقع كتاب الاستثمار

set -e  # Exit on any error

# ========================================
# CONFIGURATION - تحديث هذه القيم حسب بيئتك
# ========================================

# Project Configuration
PROJECT_NAME="investment-book"
PROJECT_VERSION="2.0.0"

# Server Configuration
REMOTE_HOST="your-server.com"           # عنوان الخادم
REMOTE_USER="your-username"             # اسم المستخدم
REMOTE_PATH="/var/www/html/$PROJECT_NAME"  # مسار المشروع على الخادم
BACKUP_PATH="/var/www/backups/$PROJECT_NAME"  # مسار النسخ الاحتياطية

# Database Configuration (if using)
DB_HOST="localhost"
DB_NAME="investment_book"
DB_USER="bookuser"
DB_PASSWORD="bookpass"

# Environment Configuration
ENVIRONMENT="production"  # production, staging, development
WEBHOOK_URL=""  # رابط الإشعارات (اختياري)

# ========================================
# SECURITY SETTINGS - إعدادات الأمان
# ========================================

# SSH Key Configuration
SSH_KEY_PATH="$HOME/.ssh/id_rsa"
SSH_OPTIONS="-o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null"

# File Permissions
FILE_PERMISSIONS="755"
DIR_PERMISSIONS="755"
CACHE_PERMISSIONS="777"

# ========================================
# COLORS FOR OUTPUT
# ========================================

RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
PURPLE='\033[0;35m'
CYAN='\033[0;36m'
NC='\033[0m' # No Color

# ========================================
# FUNCTIONS
# ========================================

log_info() {
    echo -e "${BLUE}[INFO]${NC} $1"
}

log_success() {
    echo -e "${GREEN}[SUCCESS]${NC} $1"
}

log_warning() {
    echo -e "${YELLOW}[WARNING]${NC} $1"
}

log_error() {
    echo -e "${RED}[ERROR]${NC} $1"
}

log_step() {
    echo -e "${PURPLE}[STEP]${NC} $1"
}

# Check if required tools are installed
check_requirements() {
    log_info "Checking deployment requirements..."
    
    local missing_tools=()
    
    if ! command -v rsync &> /dev/null; then
        missing_tools+=("rsync")
    fi
    
    if ! command -v ssh &> /dev/null; then
        missing_tools+=("ssh")
    fi
    
    if ! command -v curl &> /dev/null; then
        missing_tools+=("curl")
    fi
    
    if [ ${#missing_tools[@]} -ne 0 ]; then
        log_error "Missing required tools: ${missing_tools[*]}"
        log_info "Please install: sudo apt-get install ${missing_tools[*]}"
        exit 1
    fi
    
    log_success "All required tools are available"
}

# Test SSH connection
test_ssh_connection() {
    log_info "Testing SSH connection to $REMOTE_HOST..."
    if ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "echo 'SSH connection successful'" &> /dev/null; then
        log_success "SSH connection established"
    else
        log_error "Failed to connect to $REMOTE_HOST"
        log_info "Please check your SSH configuration and credentials"
        exit 1
    fi
}

# Create deployment timestamp
get_deployment_timestamp() {
    echo "$(date +%Y%m%d-%H%M%S)"
}

# ========================================
# MAIN DEPLOYMENT PROCESS
# ========================================

main() {
    local deployment_timestamp=$(get_deployment_timestamp)
    
    log_step "🚀 Starting deployment of $PROJECT_NAME v$PROJECT_VERSION"
    log_info "Environment: $ENVIRONMENT"
    log_info "Target: $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH"
    log_info "Timestamp: $deployment_timestamp"
    
    # Pre-deployment checks
    check_requirements
    test_ssh_connection
    
    # Check if we're in the right directory
    if [ ! -f "index.php" ]; then
        log_error "index.php not found. Please run this script from the project root."
        exit 1
    fi
    
    # Build frontend assets
    log_step "📦 Building frontend assets..."
    if command -v npm &> /dev/null; then
        if [ -f "package.json" ]; then
            npm ci --production
            npm run build
            log_success "Frontend assets built successfully"
        else
            log_warning "package.json not found, skipping frontend build"
        fi
    else
        log_warning "npm not found, skipping frontend build"
    fi
    
    # Create backup
    log_step "💾 Creating backup of current version..."
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "mkdir -p $BACKUP_PATH"
    if ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "[ -d $REMOTE_PATH ]"; then
        ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "cp -r $REMOTE_PATH $BACKUP_PATH/backup-$deployment_timestamp"
        log_success "Backup created: backup-$deployment_timestamp"
    else
        log_info "No existing deployment found, skipping backup"
    fi
    
    # Sync files to server
    log_step "📤 Syncing files to server..."
    rsync -avz --delete \
        --exclude 'node_modules/' \
        --exclude '.git/' \
        --exclude 'logs/' \
        --exclude 'cache/' \
        --exclude '*.log' \
        --exclude '.env' \
        --exclude 'composer.lock' \
        --exclude 'package-lock.json' \
        --exclude 'docker-compose.yml' \
        --exclude 'Dockerfile' \
        --exclude 'deploy.sh' \
        --exclude 'README.md' \
        --exclude 'CHANGELOG.md' \
        ./ $REMOTE_USER@$REMOTE_HOST:$REMOTE_PATH/
    
    log_success "Files synced successfully"
    
    # Set proper permissions
    log_step "🔐 Setting file permissions..."
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "chmod -R $FILE_PERMISSIONS $REMOTE_PATH"
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "chmod -R $CACHE_PERMISSIONS $REMOTE_PATH/logs"
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "chmod -R $CACHE_PERMISSIONS $REMOTE_PATH/cache"
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "chown -R www-data:www-data $REMOTE_PATH"
    log_success "Permissions set"
    
    # Install PHP dependencies
    log_step "📚 Installing PHP dependencies..."
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "cd $REMOTE_PATH && composer install --no-dev --optimize-autoloader --no-interaction"
    log_success "PHP dependencies installed"
    
    # Clear cache
    log_step "🧹 Clearing cache..."
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "rm -rf $REMOTE_PATH/cache/*"
    log_success "Cache cleared"
    
    # Database migration (if needed)
    if [ -f "database/migrations.sql" ]; then
        log_step "🗄️ Running database migrations..."
        ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "mysql -h $DB_HOST -u $DB_USER -p$DB_PASSWORD $DB_NAME < $REMOTE_PATH/database/migrations.sql"
        log_success "Database migrations completed"
    fi
    
    # Test the website
    log_step "🔍 Testing website..."
    sleep 5  # Wait for server to restart
    if curl -f -s "https://$REMOTE_HOST" > /dev/null; then
        log_success "Website is accessible"
    else
        log_warning "Website might not be accessible yet"
        log_info "Please check server logs and configuration"
    fi
    
    # Cleanup old backups (keep last 5)
    log_step "🗑️ Cleaning up old backups..."
    ssh $SSH_OPTIONS $REMOTE_USER@$REMOTE_HOST "cd $BACKUP_PATH && ls -t | tail -n +6 | xargs -r rm -rf"
    log_success "Old backups cleaned up"
    
    # Send notification
    if [ ! -z "$WEBHOOK_URL" ]; then
        log_step "📢 Sending notification..."
        curl -X POST -H "Content-Type: application/json" \
            -d "{\"text\":\"✅ Deployment completed for $PROJECT_NAME v$PROJECT_VERSION on $ENVIRONMENT\"}" \
            "$WEBHOOK_URL" &> /dev/null
        log_success "Notification sent"
    fi
    
    # Final summary
    echo ""
    log_success "🎉 Deployment completed successfully!"
    log_info "Website URL: https://$REMOTE_HOST"
    log_info "Backup location: $BACKUP_PATH"
    log_info "Deployment timestamp: $deployment_timestamp"
    log_info "Environment: $ENVIRONMENT"
}

# ========================================
# ERROR HANDLING
# ========================================

# Trap errors and cleanup
trap 'log_error "Deployment failed! Rolling back..."; exit 1' ERR

# ========================================
# SCRIPT EXECUTION
# ========================================

# Check if running with correct permissions
if [ "$EUID" -eq 0 ]; then
    log_warning "Running as root is not recommended"
fi

# Execute main function
main "$@" 