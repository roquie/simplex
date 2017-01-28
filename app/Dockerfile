FROM php:7.1.1-fpm-alpine

# RUN echo "short_open_tag=true" > $PHP_INI_DIR/conf.d/open-tags.ini

COPY . /app
WORKDIR /app

RUN chmod 0777 /app/application/cache \
    && chmod 0777 /app/application/logs

CMD ["php-fpm", "--allow-to-run-as-root"]