1. Instalación de OpenLDAP
Ejecuta los siguientes comandos en tu servidor Ubuntu:


sudo apt update
sudo apt install slapd ldap-utils
Durante la instalación, te pedirá establecer una contraseña para el usuario administrador de LDAP.

2. Reconfigurar slapd (si es necesario)
Si necesitas cambiar configuraciones, ejecuta:


sudo dpkg-reconfigure slapd
Selecciona las opciones según tu entorno. Generalmente:

No utilizar la configuración antigua
Dominio base: example.com → (dc=example,dc=com)
Nombre de la organización: Example Inc.
Contraseña del administrador: La que configuraste antes
Tipo de base de datos: MDB
Eliminar base de datos cuando se elimine slapd: No
Habilitar LDAP sobre TCP: Sí


3. Verificar la instalación
Para comprobar que el servicio LDAP está funcionando, usa:


sudo systemctl status slapd
También puedes consultar la base de datos:


ldapsearch -x -LLL -H ldap:/// -b dc=example,dc=com
4. Configurar Cliente LDAP (en otra máquina o en la misma)
En la máquina cliente (o en la misma si quieres probar localmente), instala los paquetes necesarios:


sudo apt install libnss-ldap libpam-ldap ldap-utils nscd
Durante la instalación, ingresa los datos del servidor LDAP:

URI del servidor: ldap://IP_DEL_SERVIDOR/
DN base: dc=example,dc=com
Versión de LDAP: 3
Cuenta de administrador: cn=admin,dc=example,dc=com
Autenticación: Sí
Verifica que puedas consultar el directorio desde el cliente:


ldapsearch -x -H ldap://IP_DEL_SERVIDOR/ -b dc=example,dc=com
