FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
    && docker-php-ext-install \
        mysqli \
        pdo \
        pdo_mysql \
        intl \
        zip \
        gd \
        soap \
        opcache \
        bcmath \
        mbstring \
    && a2enmod rewrite headers expires deflate

RUN echo "\
StartServers 10\n\
MinSpareServers 5\n\
MaxSpareServers 20\n\
MaxRequestWorkers 256\n\
MaxConnectionsPerChild 200\n\
" >> /etc/apache2/mods-available/mpm_prefork.conf

COPY php.ini /usr/local/etc/php/conf.d/suitecrm.ini

RUN echo "Header set Cache-Control \"public, max-age=3600\"" >> /etc/apache2/mods-available/headers.conf

WORKDIR /var/www/html

COPY SuiteCRM-8.10.2/ /var/www/html/
COPY SuiteCRM-Custom-Module/patients /var/www/html/public/legacy/modules/patients/
COPY SuiteCRM-Custom-Module/hospitals /var/www/html/public/legacy/modules/hospitals/
COPY SuiteCRM-Custom-Module/consents /var/www/html/public/legacy/modules/consents/
COPY SuiteCRM-Custom-Module/patients_visits /var/www/html/public/legacy/modules/patients_visits/
COPY SuiteCRM-Custom-Module/patients_diagnoses /var/www/html/public/legacy/modules/patients_diagnoses/
COPY SuiteCRM-Custom-Module/patients_allergies /var/www/html/public/legacy/modules/patients_allergies/
COPY SuiteCRM-Custom-Module/patients_prescriptions /var/www/html/public/legacy/modules/patients_prescriptions/

RUN sed -ri \
    -e 's!/var/www/html!/var/www/html/public!g' \
    /etc/apache2/sites-available/000-default.conf \
    /etc/apache2/apache2.conf

RUN echo '<Directory /var/www/html/public>\n\
    Options FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html
