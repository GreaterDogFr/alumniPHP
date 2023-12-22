FROM php:8.0-apache
WORKDIR /laragon/www/alumni
COPY . .
RUN apt-get update && \
    apt-get install -y libpng-dev && \
    docker-php-ext-install pdo pdo_mysql gd
EXPOSE 80

CMD ["apache2-foreground"]