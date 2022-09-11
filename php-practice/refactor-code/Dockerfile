FROM php:8.1-rc-fpm-alpine

WORKDIR /var/www/html

RUN addgroup -g 1000 www

RUN adduser -u 1000 -Ds /bin/bash -G www www

COPY --chown=www:www . /var/www/html/

USER www

EXPOSE 9000

CMD [ "php-fpm" ]

