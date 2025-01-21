Instalación de BIND9
Instalar BIND9:

Ejecuta el siguiente comando para instalar BIND9 en tu servidor:


sudo apt update
sudo apt install bind9
Verificar la instalación:

Una vez instalado, verifica que BIND9 esté funcionando correctamente:


systemctl status bind9
Esto debe mostrar que el servicio está activo y en funcionamiento.

Configuración de BIND9
Editar el archivo de configuración principal:

Abre el archivo de configuración de BIND9:


sudo nano /etc/bind/named.conf.local
Agrega la siguiente configuración para establecer la zona de example.com:


zone "example.com" {
    type master;
    file "/etc/bind/db.example.com";  # Ruta al archivo de zona
};
Crear el archivo de zona:

Crea el archivo de zona para example.com:


sudo nano /etc/bind/db.example.com
Y agrega la configuración para tu dominio:


$TTL    604800
@       IN      SOA     localhost. root.localhost. (
                               2         ; Serial
                          604800         ; Refresh
                           86400         ; Retry
                         2419200         ; Expire
                          604800 )       ; Negative Cache TTL
;
@       IN      NS      localhost.
@       IN      A       192.168.1.1
Reiniciar el servicio de BIND9:

Después de configurar los archivos, reinicia el servicio de BIND9 para aplicar los cambios:


sudo systemctl restart bind9

Comprobaciones
Probar la resolución DNS desde la misma máquina:

Usa el comando dig para verificar que el servidor DNS está respondiendo correctamente:

dig @localhost example.com
La salida debería indicar que se está resolviendo example.com a la dirección IP configurada (192.168.1.1).

Probar desde otra máquina en la red:

Asegúrate de que la máquina virtual tenga la configuración de red adecuada (en modo puente, por ejemplo) y que otras máquinas puedan hacer consultas al servidor DNS.


dig @<IP-de-tu-VirtualBox> example.com
Esto debería resolver el dominio correctamente.

