FROM php:8.0-apache

RUN apt-get update && \
    apt-get install -y git libcurl4-openssl-dev libzip-dev zip && \
    docker-php-ext-install mysqli pdo pdo_mysql curl zip && \
    a2enmod rewrite && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set the working directory
WORKDIR /var/www/html

# Copy application files
COPY composer.json /var/www/html/

COPY src/ /var/www/html/

RUN composer install



