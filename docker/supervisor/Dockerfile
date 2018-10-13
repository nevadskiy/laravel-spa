# Image
FROM php:7.2-cli

#--------------------------------------------------------------------------
# Application dependencies
#--------------------------------------------------------------------------

RUN apt-get update
RUN apt-get install -y supervisor

#--------------------------------------------------------------------------
# Application dependencies
#--------------------------------------------------------------------------

RUN apt-get update
RUN apt-get install -y libpng-dev libpq-dev && docker-php-ext-install zip gd

#--------------------------------------------------------------------------
# PostgreSQL:
#--------------------------------------------------------------------------

RUN docker-php-ext-install pdo pdo_pgsql

#--------------------------------------------------------------------------
# ImageMagick
#--------------------------------------------------------------------------

RUN apt-get update
RUN apt-get install -y imagemagick
RUN apt-get install -y --no-install-recommends libmagickwand-dev
RUN pecl install imagick
RUN docker-php-ext-enable imagick

#--------------------------------------------------------------------------
# Human Language and Character Encoding Support
#--------------------------------------------------------------------------

RUN apt-get install -y zlib1g-dev libicu-dev g++
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# Add supervisord conf
COPY supervisord.conf /etc/supervisor/supervisord.conf

#--------------------------------------------------------------------------
# Clean up
#--------------------------------------------------------------------------

RUN apt-get clean
RUN apt-get -y autoremove
RUN rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

# Set up default directory
WORKDIR /etc/supervisor/conf.d/

# Run after container is up
ENTRYPOINT ["/usr/bin/supervisord", "-c", "/etc/supervisor/supervisord.conf"]
