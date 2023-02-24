#FROM php:8.0-apache
FROM php:8.2-rc-apache

RUN apt-get update && apt-get install -y \
		libzip-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        libgd3 \
        libpng-dev

RUN docker-php-ext-install zip xml curl gd opcache
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-ext-enable pdo_mysql


RUN a2enmod ssl
RUN a2enmod rewrite

EXPOSE 80
EXPOSE 443