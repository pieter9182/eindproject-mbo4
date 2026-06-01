# Gebruik PHP 8.2 met Apache
FROM php:8.2-apache

# Enable mod_rewrite voor mooiere URLs
RUN a2enmod rewrite

# Allow .htaccess overrides
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Zet de DocumentRoot naar /var/www/html
WORKDIR /var/www/html

# Copy alle projectbestanden naar container
COPY . .

# Expose poort 80 (HTTP)
EXPOSE 80

CMD ["apache2-foreground"]