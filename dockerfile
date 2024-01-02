FROM php:latest

WORKDIR /var/www/alumni

COPY . /var/www/alumni/

EXPOSE 80

CMD [ "php","-S","0.0.0.0:80" ]