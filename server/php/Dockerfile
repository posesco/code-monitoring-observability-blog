FROM php:8-fpm
RUN apt update \
    && apt-get install -y \
    libsodium-dev \
    libsodium23 
COPY --from=composer:2.7.7 /usr/bin/composer /usr/bin/composer
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions redis mongodb mysqli xdebug
COPY xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
CMD ["php-fpm"]