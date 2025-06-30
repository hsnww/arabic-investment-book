# Use official PHP 8.2 Apache image
FROM php:8.2-apache

# Set working directory
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node.js dependencies and build assets
RUN npm install && npm run build

# Set proper permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && chmod -R 777 /var/www/html/logs \
    && chmod -R 777 /var/www/html/cache

# Enable Apache modules
RUN a2enmod rewrite

# Configure Apache
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Configure PHP
COPY docker/php/php.ini /usr/local/etc/php/conf.d/custom.ini

# Create necessary directories
RUN mkdir -p /var/www/html/logs /var/www/html/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"] 