FROM php:8.2-apache-bullseye
WORKDIR /var/www/html
COPY . /var/www/html

# Configure permissões para o Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Habilite o mod_rewrite do Apache para suporte a URLs amigáveis
RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]