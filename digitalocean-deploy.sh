#!/bin/bash

# ========================================
# سكريبت النشر السريع على DigitalOcean
# ========================================

set -e

# الألوان
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
PURPLE='\033[0;35m'
NC='\033[0m'

# الدوال
log_info() { echo -e "${BLUE}[INFO]${NC} $1"; }
log_success() { echo -e "${GREEN}[SUCCESS]${NC} $1"; }
log_warning() { echo -e "${YELLOW}[WARNING]${NC} $1"; }
log_error() { echo -e "${RED}[ERROR]${NC} $1"; }
log_step() { echo -e "${PURPLE}[STEP]${NC} $1"; }

# إعدادات افتراضية
DROPLET_IP=""
DROPLET_USER="root"
PROJECT_NAME="investment-book"
DOMAIN=""

# عرض القائمة الرئيسية
show_menu() {
    echo ""
    echo "🚀 سكريبت النشر على DigitalOcean"
    echo "=================================="
    echo "1. إعداد Droplet جديد"
    echo "2. نشر المشروع"
    echo "3. إعداد SSL/HTTPS"
    echo "4. مراقبة الخادم"
    echo "5. إنشاء نسخة احتياطية"
    echo "6. استعادة نسخة احتياطية"
    echo "7. خروج"
    echo ""
    read -p "اختر رقم العملية: " choice
}

# إعداد Droplet جديد
setup_droplet() {
    log_step "إعداد Droplet جديد على DigitalOcean"
    
    read -p "أدخل IP الخادم: " DROPLET_IP
    read -p "أدخل اسم النطاق (اختياري): " DOMAIN
    
    log_info "الاتصال بالخادم..."
    ssh -o ConnectTimeout=10 root@$DROPLET_IP "echo 'اتصال ناجح'" || {
        log_error "فشل الاتصال بالخادم. تأكد من IP وصحة SSH Key"
        return 1
    }
    
    log_info "تحديث النظام..."
    ssh root@$DROPLET_IP "apt update && apt upgrade -y"
    
    log_info "تثبيت Apache..."
    ssh root@$DROPLET_IP "apt install apache2 -y"
    
    log_info "تثبيت PHP..."
    ssh root@$DROPLET_IP "apt install php8.1 php8.1-mysql php8.1-curl php8.1-gd php8.1-mbstring php8.1-xml php8.1-zip -y"
    
    log_info "تثبيت Composer..."
    ssh root@$DROPLET_IP "curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer"
    
    log_info "تثبيت Node.js..."
    ssh root@$DROPLET_IP "curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash - && apt install nodejs -y"
    
    log_info "تثبيت MySQL..."
    ssh root@$DROPLET_IP "apt install mysql-server -y"
    
    log_info "إنشاء مجلد المشروع..."
    ssh root@$DROPLET_IP "mkdir -p /var/www/$PROJECT_NAME"
    
    log_success "تم إعداد الخادم بنجاح!"
    
    # حفظ الإعدادات
    echo "DROPLET_IP=$DROPLET_IP" > .do-config
    echo "DOMAIN=$DOMAIN" >> .do-config
}

# نشر المشروع
deploy_project() {
    log_step "نشر المشروع على الخادم"
    
    if [ ! -f ".do-config" ]; then
        read -p "أدخل IP الخادم: " DROPLET_IP
    else
        source .do-config
    fi
    
    log_info "بناء الأصول الأمامية..."
    if [ -f "package.json" ]; then
        npm ci --production
        npm run build
        log_success "تم بناء الأصول الأمامية"
    fi
    
    log_info "رفع الملفات إلى الخادم..."
    rsync -avz --delete \
        --exclude 'node_modules' \
        --exclude '.git' \
        --exclude 'logs' \
        --exclude 'cache' \
        --exclude '*.log' \
        --exclude '.env' \
        ./ root@$DROPLET_IP:/var/www/$PROJECT_NAME/
    
    log_info "تعيين الصلاحيات..."
    ssh root@$DROPLET_IP "chown -R www-data:www-data /var/www/$PROJECT_NAME"
    ssh root@$DROPLET_IP "chmod -R 755 /var/www/$PROJECT_NAME"
    ssh root@$DROPLET_IP "chmod -R 777 /var/www/$PROJECT_NAME/logs"
    ssh root@$DROPLET_IP "chmod -R 777 /var/www/$PROJECT_NAME/cache"
    
    log_info "تثبيت تبعيات PHP..."
    ssh root@$DROPLET_IP "cd /var/www/$PROJECT_NAME && composer install --no-dev --optimize-autoloader"
    
    log_info "إعداد Apache..."
    setup_apache_config
    
    log_success "تم نشر المشروع بنجاح!"
    log_info "يمكنك الوصول للموقع على: http://$DROPLET_IP"
}

# إعداد Apache
setup_apache_config() {
    local config_content="<VirtualHost *:80>
    ServerName $DOMAIN
    ServerAlias www.$DOMAIN
    DocumentRoot /var/www/$PROJECT_NAME
    
    <Directory /var/www/$PROJECT_NAME>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog \${APACHE_LOG_DIR}/${PROJECT_NAME}_error.log
    CustomLog \${APACHE_LOG_DIR}/${PROJECT_NAME}_access.log combined
</VirtualHost>"
    
    ssh root@$DROPLET_IP "echo '$config_content' > /etc/apache2/sites-available/$PROJECT_NAME.conf"
    ssh root@$DROPLET_IP "a2ensite $PROJECT_NAME.conf"
    ssh root@$DROPLET_IP "a2enmod rewrite"
    ssh root@$DROPLET_IP "systemctl reload apache2"
}

# إعداد SSL/HTTPS
setup_ssl() {
    log_step "إعداد SSL/HTTPS"
    
    source .do-config
    
    if [ -z "$DOMAIN" ]; then
        log_error "يجب إعداد النطاق أولاً"
        return 1
    fi
    
    log_info "تثبيت Certbot..."
    ssh root@$DROPLET_IP "apt install certbot python3-certbot-apache -y"
    
    log_info "الحصول على شهادة SSL..."
    ssh root@$DROPLET_IP "certbot --apache -d $DOMAIN -d www.$DOMAIN --non-interactive --agree-tos --email admin@$DOMAIN"
    
    log_success "تم إعداد SSL بنجاح!"
    log_info "يمكنك الوصول للموقع على: https://$DOMAIN"
}

# مراقبة الخادم
monitor_server() {
    log_step "مراقبة الخادم"
    
    source .do-config
    
    echo ""
    echo "📊 معلومات الخادم:"
    echo "=================="
    
    echo "💾 استخدام القرص:"
    ssh root@$DROPLET_IP "df -h"
    
    echo ""
    echo "🧠 استخدام الذاكرة:"
    ssh root@$DROPLET_IP "free -h"
    
    echo ""
    echo "🔥 العمليات النشطة:"
    ssh root@$DROPLET_IP "ps aux | head -10"
    
    echo ""
    echo "📝 آخر السجلات:"
    ssh root@$DROPLET_IP "tail -5 /var/log/apache2/error.log"
}

# إنشاء نسخة احتياطية
create_backup() {
    log_step "إنشاء نسخة احتياطية"
    
    source .do-config
    local backup_date=$(date +%Y%m%d-%H%M%S)
    
    log_info "إنشاء نسخة احتياطية..."
    ssh root@$DROPLET_IP "mkdir -p /var/backups/$PROJECT_NAME"
    ssh root@$DROPLET_IP "tar -czf /var/backups/$PROJECT_NAME/backup-$backup_date.tar.gz -C /var/www $PROJECT_NAME"
    
    log_success "تم إنشاء النسخة الاحتياطية: backup-$backup_date.tar.gz"
}

# استعادة نسخة احتياطية
restore_backup() {
    log_step "استعادة نسخة احتياطية"
    
    source .do-config
    
    log_info "عرض النسخ الاحتياطية المتاحة:"
    ssh root@$DROPLET_IP "ls -la /var/backups/$PROJECT_NAME/"
    
    read -p "أدخل اسم ملف النسخة الاحتياطية: " backup_file
    
    log_info "استعادة النسخة الاحتياطية..."
    ssh root@$DROPLET_IP "cd /var/www && tar -xzf /var/backups/$PROJECT_NAME/$backup_file"
    ssh root@$DROPLET_IP "chown -R www-data:www-data /var/www/$PROJECT_NAME"
    
    log_success "تم استعادة النسخة الاحتياطية بنجاح!"
}

# الحلقة الرئيسية
main() {
    while true; do
        show_menu
        
        case $choice in
            1)
                setup_droplet
                ;;
            2)
                deploy_project
                ;;
            3)
                setup_ssl
                ;;
            4)
                monitor_server
                ;;
            5)
                create_backup
                ;;
            6)
                restore_backup
                ;;
            7)
                log_info "شكراً لاستخدام السكريبت!"
                exit 0
                ;;
            *)
                log_error "اختيار غير صحيح"
                ;;
        esac
        
        echo ""
        read -p "اضغط Enter للعودة للقائمة الرئيسية..."
    done
}

# تشغيل السكريبت
main "$@" 