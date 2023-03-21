FROM php:7.4-apache

WORKDIR /app

COPY . /app

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8000"]