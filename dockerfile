# Gebruik PHP 8.2 met Apache
FROM php:8.2-apache

# Enable mod_rewrite voor mooiere URLs (optioneel)
RUN a2enmod rewrite

# Zet de DocumentRoot naar /var/www/html
WORKDIR /var/www/html

# Copy alle projectbestanden naar container
COPY . .

# Expose poort 80 (HTTP)
EXPOSE 80

# Apache draait automatisch
CMD ["apache2-foreground"]
