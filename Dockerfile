FROM php:8.1-rc-fpm-alpine3.16
 
RUN apk update --no-cache \
&& apk add \
icu-dev \
oniguruma-dev \
tzdata
 
RUN docker-php-ext-install intl

RUN docker-php-ext-install pcntl

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-install mbstring

RUN rm -rf /var/cache/apk/*
 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer

CMD ["php-fpm"]