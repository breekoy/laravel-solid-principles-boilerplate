FROM php:8.1-fpm-alpine3.16 AS php_base

RUN apk add --update libpng-dev libzip-dev htop

RUN docker-php-ext-install pdo pdo_mysql gd zip opcache

COPY ./php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer