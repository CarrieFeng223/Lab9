FROM php:8.1-fpm
WORKDIR /var/www
COPY
RUN composer install
CMD php artisan serve -- host=0.0.0.0 -- port=8000
EXPOSE 8000