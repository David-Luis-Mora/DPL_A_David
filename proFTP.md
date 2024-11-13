Instalación de ProFTPD en Ubuntu
Paso 1: Actualizar el sistema
Abre una terminal y actualiza la lista de paquetes:


sudo apt update
Paso 2: Instalar ProFTPD
Para instalar ProFTPD, usa el siguiente comando:


sudo apt install proftpd
Durante la instalación, selecciona standalone como el modo de funcionamiento.

Paso 3: Verificar que ProFTPD esté activo
Verifica que el servicio esté activo y en funcionamiento:



sudo systemctl status proftpd
Si el servicio no está activo, inícialo con:


sudo systemctl start proftpd
Habilítalo para que se inicie automáticamente al encender el sistema:



sudo systemctl enable proftpd
Paso 4: Configurar ProFTPD
Abre el archivo de configuración de ProFTPD:



sudo nano /etc/proftpd/proftpd.conf
Realiza las siguientes configuraciones:

Cambiar el nombre del servidor:

plaintext
Copiar código
ServerName "Mi Servidor FTP"
Establecer el directorio raíz para usuarios:

plaintext
Copiar código
DefaultRoot ~
Configurar mensajes personalizados (opcional):

plaintext

AccessGrantMsg "Bienvenido al servidor FTP"
AccessDenyMsg "Error de acceso"
Desactivar acceso anónimo:



<Limit LOGIN>
  DenyAll
</Limit>
Guarda y cierra el archivo (Ctrl + X, Y, y Enter en nano).

Paso 5: Reiniciar ProFTPD
Después de configurar ProFTPD, reinicia el servicio:


sudo systemctl restart proftpd
Paso 6: Configurar el Firewall
Si tienes un firewall (ufw), permite el puerto 21:


sudo ufw allow 21/tcp
Paso 7: Probar la Conexión
Desde otra máquina en la misma red, conéctate al servidor FTP:


ftp <IP_del_servidor>
También puedes usar un navegador web o un cliente FTP como FileZilla.
