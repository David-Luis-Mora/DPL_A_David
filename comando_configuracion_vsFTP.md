Instalar vsFTP
sudo apt update
sudo apt install vsftpd

 Configuración básica
sudo nano /etc/vsftpd.conf

Lo introducimos dentro del archivo
anonymous_enable=NO               
local_enable=YES                  
write_enable=YES                 
chroot_local_user=YES             
allow_writeable_chroot=YES        


Reiniciamos el servicio
sudo systemctl restart vsftpd

sudo adduser alex
sudo adduser ethan


sudo mkdir -p /home/nombre_usuario/ftp/upload
sudo chmod 750 /home/nombre_usuario/ftp
sudo chmod 750 /home/nombre_usuario/ftp/upload
sudo chown -R nombre_usuario:nombre_usuario /home/nombre_usuario/ftp



sudo nano /etc/vsftpd.conf

Esto lo introducimos dentro del archivo vsftpd.conf
xferlog_enable=YES
xferlog_file=/var/log/vsftpd.log
log_ftp_protocol=YES


tail -f /var/log/vsftpd.log

sudo openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/vsftpd.key -out /etc/ssl/certs/vsftpd.crt


sudo nano /etc/vsftpd.conf

Esto lo introducimos dentro del archivo vsftpd.conf
rsa_cert_file=/etc/ssl/certs/vsftpd.conf
rsa_private_key_file=/etc/ssl/private/vsftpd.conf
ssl_enable=YES
allow_anon_ssl=NO
force_local_data_ssl=YES
force_local_logins_ssl=YES
ssl_tlsv1=YES
ssl_sslv2=NO
ssl_sslv3=NO
require_ssl_reuse=NO
ssl_ciphers=HIGH


Reiniciamos
sudo systemctl restart vsftpd

