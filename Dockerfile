FROM php:8.1-apache
RUN a2dismod mpm_event && a2enmod mpm_prefork
RUN docker-php-ext-install pdo_mysql
