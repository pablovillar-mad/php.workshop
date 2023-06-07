FROM php:8.1-fpm-alpine

RUN apk update && apk add build-base cmake git curl-dev libxml2-dev zlib-dev libpng-dev libzip-dev oniguruma-dev \
    icu-dev

RUN docker-php-ext-install mysqli pdo pdo_mysql intl \
    curl dom gd mbstring xml exif zip  && \
    docker-php-ext-enable exif mbstring

RUN adduser -S -u 1000 -g www-data test

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

COPY ./php.ini /usr/local/etc/php/conf.d/php.ini

WORKDIR /code

USER test

