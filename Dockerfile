FROM php:7.4-apache

COPY . /var/www/simplePHPApp

WORKDIR /var/www/simplePHPApp

CMD ["php", "./index.php"]
