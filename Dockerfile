FROM wordpress:php8.2-apache

# Kopiraj lokalne fajlove
COPY . /var/www/html

# Podesi prava pristupa
RUN chown -R www-data:www-data /var/www/html

# Uključi mod_rewrite za permalinks
RUN a2enmod rewrite
