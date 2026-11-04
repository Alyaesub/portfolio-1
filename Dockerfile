# Installation des dépendances PHP
FROM composer:2 AS vendor

WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install \
  --no-dev \
  --prefer-dist \
  --no-interaction \
  --optimize-autoloader \
  --no-scripts

# Image PHP + Apache
FROM php:8.3-apache

RUN a2enmod rewrite headers

# Configuration Apache
COPY docker/apache/portfolio.conf /etc/apache2/sites-available/000-default.conf

# Configuration PHP production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

WORKDIR /var/www/html

# Code du portfolio
COPY . .

# Dépendances Composer
COPY --from=vendor /app/vendor ./vendor

EXPOSE 80