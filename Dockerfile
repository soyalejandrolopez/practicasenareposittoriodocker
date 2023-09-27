# Usa la imagen oficial de WordPress como base
FROM wordpress:latest

# Copia el archivo de configuración personalizado para WordPress
COPY wp-config.php /var/www/html/wp-config.php

# Cambia el propietario de los archivos de WordPress para que NGINX pueda acceder a ellos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto 80 para que NGINX pueda comunicarse con WordPress
EXPOSE 80
