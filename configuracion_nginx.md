# Comandos de Gestión de Nginx y Paquetes en Linux

Este archivo explica el funcionamiento de una serie de comandos utilizados para instalar, configurar y gestionar Nginx en un sistema basado en Debian (como Ubuntu).

## Comandos

### 1. `sudo apt update`
   - **Descripción**: Actualiza la lista de paquetes disponibles desde los repositorios configurados.
  

### 2. `apt install nginx`
   - **Descripción**: Instala el servidor web Nginx en el sistema.

### 3. `systemctl status nginx`
   - **Descripción**: Muestra el estado actual del servicio `nginx`, indicando si está activo, detenido o ha fallado.


### 4. `nginx -t`
   - **Descripción**: Realiza una prueba de la configuración de Nginx.


### 5. `cd /etc/nginx`
   - **Descripción**: Cambia al directorio de configuración de Nginx (`/etc/nginx`).


### 6. `ls`
   - **Descripción**: Muestra una lista de los archivos y directorios dentro del directorio actual.

### 7. `cd sites-available`
   - **Descripción**: Cambia al directorio `sites-available`, que contiene los archivos de configuración de sitios disponibles en Nginx.


### 8. `ls`
   - **Descripción**: Muestra una lista de los archivos en el directorio `sites-available`.


### 9. `cd sites-enabled`
   - **Descripción**: Cambia al directorio `sites-enabled`, que contiene los enlaces simbólicos a los sitios web habilitados.


### 10. `ls -l`
   - **Descripción**: Muestra una lista detallada de los archivos en el directorio actual (`sites-enabled`), incluyendo permisos y propietarios.


### 11. `cat default`
   - **Descripción**: Muestra el contenido del archivo de configuración `default` en el directorio `sites-enabled`.


### 12. `cd /var/www/html`
   - **Descripción**: Cambia al directorio `/var/www/html`, donde se encuentran los archivos web servidos por Nginx.

### 13. `ls -l`
   - **Descripción**: Muestra una lista detallada de los archivos dentro de `/var/www/html`.

### 14. `systemctl restart nginx`
   - **Descripción**: Reinicia el servicio de Nginx, aplicando cualquier cambio realizado en los archivos de configuración o en el contenido web.

### 15. `rm index.nginx-debian.html`
   - **Descripción**: Elimina el archivo `index.nginx-debian.html`, que es el archivo de bienvenida predeterminado de Nginx.

### 16. `nano index.html`
   - **Descripción**: Abre el editor de texto `nano` para crear o editar el archivo `index.html` en el directorio `/var/www/html`.
   Ponemos dentro del html un h1 con un Hola mundo

### 17. `systemctl restart nginx`
   - **Descripción**: Reinicia el servicio de Nginx nuevamente para aplicar los cambios realizados al archivo `index.html`.

### 18. `systemctl status nginx`
   - **Descripción**: Muestra el estado final del servicio Nginx.

