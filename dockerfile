# Dockerfile
FROM php:8.1-fpm

# Instala extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Define diretório de trabalho
WORKDIR /var/www/html
