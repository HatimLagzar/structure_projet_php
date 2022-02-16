FROM php:7.4-apache

COPY . /var/www/simplePHPApp

WORKDIR /var/www/simplePHPApp

CMD ["php", "-S", "127.0.0.1:8080"]
