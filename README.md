# WordPress en Docker

Este proyecto te permite ejecutar WordPress en un contenedor Docker utilizando el puerto 9000 para la comunicación.

## Requisitos Previos

Asegúrate de tener Docker instalado en tu sistema antes de ejecutar este contenedor.

## Uso

Para ejecutar el contenedor de WordPress en el puerto 9000, puedes utilizar el siguiente comando:

```bash
docker run -d -p 9000:80 --name mi-wordpress wordpress

