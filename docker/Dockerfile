FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    vim \
    unzip \
    libpq-dev

# Install PostgreSQL PDO extensions
RUN docker-php-ext-install pdo pdo_pgsql pgsql

WORKDIR /var/www