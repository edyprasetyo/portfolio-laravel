# Dockerfile
FROM php:8.0-cli

RUN apt-get update -y && apt-get install -y libmcrypt-dev libonig-dev

RUN rm -rf /var/lib/apt

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN docker-php-ext-install pdo mbstring
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /app
COPY . /app

RUN composer install

EXPOSE 8000
CMD php artisan serve --host=0.0.0.0 --port=8000
