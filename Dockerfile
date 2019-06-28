FROM php:7.1-fpm-alpine AS dev

COPY . /app

WORKDIR /app