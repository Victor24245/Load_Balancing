FROM php:8.1-fpm

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

CMD ["php-fpm"]

