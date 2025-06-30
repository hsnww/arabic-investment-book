# Makefile for Investment Book Development
# ملف Makefile لتطوير كتاب الاستثمار

.PHONY: help install build dev test clean deploy docker-up docker-down

# Default target
help:
	@echo "Available commands:"
	@echo "  install    - Install PHP and Node.js dependencies"
	@echo "  build      - Build frontend assets"
	@echo "  dev        - Start development server"
	@echo "  test       - Run tests"
	@echo "  clean      - Clean cache and temporary files"
	@echo "  deploy     - Deploy to production"
	@echo "  docker-up  - Start Docker containers"
	@echo "  docker-down- Stop Docker containers"
	@echo "  logs       - View application logs"

# Install dependencies
install:
	@echo "Installing PHP dependencies..."
	composer install
	@echo "Installing Node.js dependencies..."
	npm install
	@echo "Installation completed!"

# Build frontend assets
build:
	@echo "Building frontend assets..."
	npm run build
	@echo "Build completed!"

# Start development server
dev:
	@echo "Starting development server..."
	php -S localhost:8000 -t .
	@echo "Server started at http://localhost:8000"

# Run tests
test:
	@echo "Running tests..."
	composer test
	@echo "Tests completed!"

# Clean cache and temporary files
clean:
	@echo "Cleaning cache and temporary files..."
	rm -rf cache/*
	rm -rf logs/*
	rm -rf node_modules/.cache
	rm -rf assets/dist
	@echo "Cleanup completed!"

# Deploy to production
deploy:
	@echo "Deploying to production..."
	chmod +x deploy.sh
	./deploy.sh
	@echo "Deployment completed!"

# Start Docker containers
docker-up:
	@echo "Starting Docker containers..."
	docker-compose up -d
	@echo "Docker containers started!"
	@echo "Website: http://localhost:8080"
	@echo "phpMyAdmin: http://localhost:8081"
	@echo "MailHog: http://localhost:8025"

# Stop Docker containers
docker-down:
	@echo "Stopping Docker containers..."
	docker-compose down
	@echo "Docker containers stopped!"

# View logs
logs:
	@echo "Viewing application logs..."
	tail -f logs/error.log

# Build Docker image
docker-build:
	@echo "Building Docker image..."
	docker-compose build
	@echo "Docker image built!"

# Restart Docker containers
docker-restart:
	@echo "Restarting Docker containers..."
	docker-compose restart
	@echo "Docker containers restarted!"

# Update dependencies
update:
	@echo "Updating PHP dependencies..."
	composer update
	@echo "Updating Node.js dependencies..."
	npm update
	@echo "Dependencies updated!"

# Security check
security:
	@echo "Running security checks..."
	composer audit
	npm audit
	@echo "Security checks completed!"

# Code quality check
quality:
	@echo "Running code quality checks..."
	composer check-style
	npm run lint
	@echo "Code quality checks completed!"

# Fix code style
fix-style:
	@echo "Fixing code style..."
	composer fix-style
	npm run lint:fix
	@echo "Code style fixed!"

# Database operations (if needed in future)
db-migrate:
	@echo "Running database migrations..."
	# php artisan migrate

db-seed:
	@echo "Seeding database..."
	# php artisan db:seed

# Backup
backup:
	@echo "Creating backup..."
	tar -czf backup-$(date +%Y%m%d-%H%M%S).tar.gz \
		--exclude=node_modules \
		--exclude=vendor \
		--exclude=logs \
		--exclude=cache \
		--exclude=.git \
		.
	@echo "Backup created!"

# Production setup
prod-setup:
	@echo "Setting up production environment..."
	composer install --no-dev --optimize-autoloader
	npm run build
	chmod -R 755 .
	chmod -R 777 logs cache
	@echo "Production setup completed!"

# Development setup
dev-setup:
	@echo "Setting up development environment..."
	composer install
	npm install
	cp .env.example .env
	@echo "Development setup completed!" 