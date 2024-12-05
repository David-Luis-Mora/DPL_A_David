# Configuración de un certificado SSL e instalación en Apache2

### 1. Instalar OpenSSL

apt install openssl
### 2. Generar la clave privada

Crea una clave privada con el siguiente comando:

openssl genrsa -out server.key 1024

### 3. Crear el archivo CSR
Genera el archivo de solicitud de firma del certificado (CSR):
openssl req -new -key server.key -out server.csr

### 4. Generar el certificado autofirmado

Crea el certificado con una validez de 365 días:

openssl x509 -req -days 365 -in server.csr -signkey server.key -out server.crt

### 5. Copiar los archivos generados
Copia los archivos del certificado y la clave a los directorios correspondientes:


cp server.crt /etc/ssl/certs/
cp server.key /etc/ssl/certs/

### 6. Verificar el estado de Apache2

Comprueba que el servicio Apache2 esté activo:

systemctl status apache2

### 7. Activar el módulo SSL en Apache2

Habilita el módulo SSL en Apache2:

a2enmod ssl

### 8. Reiniciar Apache2
Reinicia el servicio para aplicar los cambios:

systemctl restart apache2

### 9. Configurar un VirtualHost con SSL
Accede al directorio de configuración de sitios disponibles:

cd /etc/apache2/sites-available
Edita o crea un archivo de configuración para el sitio:


nano prueba1.com.conf

Agrega la configuración para el VirtualHost con SSL:

apache

<VirtualHost *:443>
    DocumentRoot /var/www/html/prueba1.com
    SSLEngine on
    SSLCertificateKeyFile /etc/ssl/certs/server.key
    SSLCertificateFile /etc/ssl/certs/server.crt
</VirtualHost>

### 10. Reiniciar Apache2 nuevamente


Reinicia el servicio Apache2:


systemctl restart apache2

### 11. Verificar el estado de Apache2

Confirma que Apache2 se esté ejecutando correctamente:


systemctl status apache2