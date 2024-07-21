FROM php:8-fpm
RUN apt-get update
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN install-php-extensions redis mongodb mysqli
CMD ["php-fpm"]