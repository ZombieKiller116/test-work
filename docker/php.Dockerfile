FROM php:7.3.22-fpm
COPY . /var/www/html
WORKDIR /var/www/html