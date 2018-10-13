# Image
FROM php:7.2-fpm

#--------------------------------------------------------------------------
# Application dependencies
#--------------------------------------------------------------------------

RUN apt-get update
RUN apt-get install -y curl && docker-php-ext-install zip curl

#--------------------------------------------------------------------------
# MySQL:
#--------------------------------------------------------------------------

RUN docker-php-ext-install pdo pdo_mysql

# Custom config
Add ./custom.ini:/usr/local/etc/php/conf.d/custom.ini

#--------------------------------------------------------------------------
# Clean up
#--------------------------------------------------------------------------

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Set up default directory
WORKDIR /var/www
