Instalación de vsftpd en Ubuntu
Paso 1: Actualizar el sistema
Abre una terminal en Ubuntu.

Actualiza la lista de paquetes:
sudo apt update
Paso 2: Instalar vsftpd
Para instalar vsftpd, escribe el siguiente comando:


sudo apt install vsftpd
Espera a que se complete la instalación.

Paso 3: Verificar que vsftpd esté activo
Una vez instalado, verifica que el servicio vsftpd esté activo y en ejecución:


sudo systemctl status vsftpd
Deberías ver "active (running)" en el estado del servicio. Si no está activo, puedes iniciarlo con:


sudo systemctl start vsftpd
Si deseas que vsftpd se inicie automáticamente con el sistema, habilítalo con:


sudo systemctl enable vsftpd
Paso 4: Configurar vsftpd
Abre el archivo de configuración de vsftpd:


sudo nano /etc/vsftpd.conf
Realiza los siguientes cambios en el archivo de configuración:

Permitir el acceso a usuarios locales:


local_enable=YES
Permitir la subida de archivos:


write_enable=YES
Restringir a los usuarios locales a sus propios directorios:


chroot_local_user=YES
Desactivar acceso anónimo (si no quieres que los usuarios anónimos accedan):


anonymous_enable=NO
Guarda los cambios y cierra el archivo (Ctrl + X, luego Y y Enter en nano).

Si estás usando chroot_local_user=YES, asegúrate de que el directorio de inicio del usuario no tenga permisos de escritura. Puedes crear un subdirectorio con permisos de escritura:


chmod a-w /home/usuario
mkdir /home/usuario/ftp
chmod 755 /home/usuario/ftp
Paso 5: Reiniciar vsftpd
Después de configurar vsftpd, reinicia el servicio:


sudo systemctl restart vsftpd
Paso 6: Configurar el Firewall
Si tienes un firewall (ufw), permite el tráfico en el puerto 21:


sudo ufw allow 21/tcp
Paso 7: Probar la Conexión
Desde otra máquina en la misma red, conéctate al servidor FTP con:


ftp <IP_del_servidor>
También puedes usar un navegador web o un cliente FTP como FileZilla para conectarte.
