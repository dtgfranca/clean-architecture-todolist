FROM php:8.0-apache

RUN apt update -y &&\
    apt install nano -y &&\
    apt-get install libldb-dev libldap2-dev  libzip-dev  -y

RUN docker-php-ext-install opcache
RUN apt-get update \
 && apt-get install -y git zlib1g-dev libpng-dev \
 &&  apt-get install libcurl4-gnutls-dev \
 && docker-php-ext-install mysqli  gd zip \
 && docker-php-ext-install pdo pdo_mysql zip 

#RUN pecl install xdebug-2.6.1 && docker-php-ext-enable xdebug

RUN  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" &&\
    php composer-setup.php --install-dir=/bin &&\
    php -r "unlink('composer-setup.php');"
