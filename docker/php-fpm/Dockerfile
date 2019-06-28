# Development image
FROM php:7.1-fpm-alpine AS dev

RUN apk update \
 && apk add $PHPIZE_DEPS \
    git \
    vim \
    icu-dev \
    libmcrypt-dev \
    libzip-dev \
    libcurl

# Xdebug
RUN pecl install xdebug-2.5.3 && \
    docker-php-ext-enable xdebug

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

# Config files and code
COPY php-fpm/files/extra.ini /usr/local/etc/php/conf.d
COPY php-fpm/files/xdebug.ini /usr/local/etc/php/conf.d
COPY php-fpm/files/www.conf /usr/local/etc/php-fpm.d
COPY . /app

WORKDIR /app
