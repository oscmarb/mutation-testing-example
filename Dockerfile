FROM php:8.0-apache

RUN mkdir /app
WORKDIR /app

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
RUN pecl install xdebug \
  && docker-php-ext-enable xdebug