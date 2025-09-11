# Stage 1: Install dependencies with Composer
FROM composer:2 as vendor
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader

# Stage 2: Setup the production image
FROM php:8.2-apache
WORKDIR /var/www/html

# Copy vendor files from the first stage
COPY --from=vendor /app/vendor ./vendor
# Copy the rest of the application files
COPY . .

# Set the document root for Apache and enable rewrite
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf && \
    a2enmod rewrite

# Set permissions for Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80