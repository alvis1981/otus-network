FROM php:7.2-fpm

RUN apt-get update && apt-get install --no-install-recommends --assume-yes \
        git \
        python-setuptools \
        unzip \
        zip \
        wget zip libcurl4-gnutls-dev autoconf pkg-config libssl-dev libicu-dev g++ git libz-dev

RUN docker-php-ext-install bcmath pcntl curl pdo_mysql mysqli intl sockets sysvsem && docker-php-ext-enable intl sockets sysvsem mysqli
RUN pecl install xdebug && docker-php-ext-enable xdebug

WORKDIR /var/www