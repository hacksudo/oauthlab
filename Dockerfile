FROM php:8.2-apache

# Copy lab files directly into Apache web root
COPY . /var/www/html/

# Fix permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose Apache
EXPOSE 80

CMD ["apache2-foreground"]
