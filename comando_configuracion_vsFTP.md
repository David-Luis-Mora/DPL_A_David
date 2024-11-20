Instalar vsFTP
sudo apt update
sudo apt install vsftpd

Si no tenemos el archivo, creamos el archivo 00-installer-config.yaml
network:
 ethernets:
  enpOs3:
   dhcp4: true
    addresses:
     - IP/mascara
    nameservers:
     addresses:
      - IP
 version: 2
     


 Configuración básica
sudo nano /etc/vsftpd.conf

Lo introducimos dentro del archivo
anonymous_enable=NO   
anonymous_root=/srv/ftp/anonimo
local_enable=YES                  
write_enable=YES                 
chroot_local_user=YES
chroot_list_enable=YES
chroot_list_file=/etc/vsftpd.chroot_list
allow_writeable_chroot=YES

Creamos los nuevo usuarios
sudo adduser alex
sudo adduser ethan


Accedemos al archivo
sudo nano /etc/vsftpd.chroot_list

Aqui ponemos el nombre del usuario que tenga acceso
david



Reiniciamos el servicio
sudo service vsftpd restart


 Configuración básica
sudo nano /etc/vsftpd.conf

Lo introducimos dentro del archivo
userlist_enable=YES
userlist_deny=YES
userlist_file=/etc/vsftpd.user_list


Accedemos al archivo
sudo nano /etc/vsftpd.user_list

Aqui ponemos a los usuario que hemos creado anteriormente
alex
ethan



Configuración básica
sudo nano /etc/vsftpd.conf

Lo introducimos dentro del archivo
ftpd_banner=Bienvenido al servidor David



sudo nano /etc/vsftpd.conf

Esto lo introducimos dentro del archivo vsftpd.conf
xferlog_enable=YES
xferlog_file=/var/log/vsftpd.log
log_ftp_protocol=YES


sudo tail -10 /var/log/vsftpd.log



sudo nano /etc/vsftpd.conf

Esto lo introducimos dentro del archivo vsftpd.conf
rsa_cert_file=/etc/ssl/certs/vsftpd.conf
rsa_private_key_file=/etc/ssl/private/vsftpd.conf
ssl_enable=YES
idle_session_timeout=10


Reiniciamos
sudo service vsftpd restart


Para que la conexion sea cifrado
sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt

