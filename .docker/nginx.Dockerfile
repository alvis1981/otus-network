FROM nginx:latest

RUN rm /etc/nginx/conf.d/*

COPY ./docker/nginx-fpm.conf /etc/nginx/conf.d/php.conf

WORKDIR /var/www/
