FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql

RUN mkdir -p /var/www/html/admin/tmp/assets && \
    chown -R www-data:www-data /var/www/html/admin/tmp/assets && \
    chmod -R 775 /var/www/html/admin/tmp/assets
    