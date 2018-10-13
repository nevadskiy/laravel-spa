# Image
FROM php:7.2-cli

#--------------------------------------------------------------------------
# Application dependencies
#--------------------------------------------------------------------------

RUN apt-get update
RUN apt-get install -y curl && docker-php-ext-install zip curl

#--------------------------------------------------------------------------
# MySQL:
#--------------------------------------------------------------------------

RUN docker-php-ext-install pdo pdo_mysql

#--------------------------------------------------------------------------
# Composer installation
#--------------------------------------------------------------------------

ENV COMPOSER_ALLOW_SUPERUSER 1
RUN php -r "readfile('http://getcomposer.org/installer');" | php -- --install-dir=/usr/bin/ --filename=composer

#--------------------------------------------------------------------------
# Clean up
#--------------------------------------------------------------------------

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Set up default directory
WORKDIR /var/www
