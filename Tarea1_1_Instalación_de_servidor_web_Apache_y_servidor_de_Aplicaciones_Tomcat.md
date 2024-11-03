1. La arquitectura Web es un modelo compuesto de tres capas, ¿cuáles son y cuál es la función de cada una de ellas?

La arquitectura web está compuesta por tres capas:

    Capa de Presentación (Front-end):
        Función: Es la interfaz de usuario. Se encarga de la presentación de la información y la interacción del usuario con la aplicación web. Utiliza tecnologías como HTML, CSS y JavaScript.

    Capa de Aplicación (Back-end):
        Función: Contiene la lógica de negocio. Procesa las solicitudes del usuario, realiza operaciones en la base de datos y genera respuestas que serán enviadas a la capa de presentación. Utiliza lenguajes como PHP, Python, Ruby, Java, etc.

    Capa de Datos:
        Función: Almacena y gestiona la información de la aplicación. Incluye sistemas de gestión de bases de datos (DBMS) como MySQL, PostgreSQL, etc. Se encarga de la persistencia de datos.




2. Una plataforma web es el entorno de desarrollo de software empleado para diseñar y ejecutar un sitio web; destacan dos plataformas web, LAMP y WISA. Explica en qué consiste cada una de ellas.

LAMP:

    Descripción: Es un conjunto de software libre que incluye Linux (sistema operativo), Apache (servidor web), MySQL (sistema de gestión de bases de datos) y PHP (lenguaje de programación).
    Función: Proporciona un entorno completo para desarrollar y ejecutar aplicaciones web dinámicas. Cada componente juega un papel clave en la entrega de contenido web.

WISA:

    Descripción: Es una plataforma que consiste en Windows (sistema operativo), IIS (Internet Information Services, servidor web), SQL Server (sistema de gestión de bases de datos) y ASP.NET (framework para aplicaciones web).
    Función: Similar a LAMP, pero está diseñado para entornos Windows, permitiendo desarrollar aplicaciones web escalables y seguras.



3. Dispones de una máquina que cuenta con el sistema operativo Ubuntu 10.04 LTS recientemente actualizado, esta máquina tiene el entorno de red configurado y, además, dispones de conexión a Internet. Además, estás trabajando con la cuenta del usuario root. Indica cada uno de los pasos, y comandos implicados en ellos, para conseguir hacer lo siguiente:
    Instalar el servidor web Apache desde terminal.
    Comprobar que está funcionando el servidor Apache desde terminal.
    Comprobar que está funcionando el servidor Apache desde navegador.
    Cambiar el puerto por el cual está escuchando Apache pasándolo al puerto 82.
    Instalar el servidor de aplicaciones Tomcat.


A. Instalación del Servidor Web Apache

sudo apt-get update

sudo apt-get install apache2


B. Comprobar que Apache está funcionando desde la terminal

sudo service apache2 status

El estado debería indicar que el servicio está activo (running).

C. Comprobar que Apache está funcionando desde el navegador

Abrir un navegador web.

Acceder a la dirección:

http://localhost


D. Cambiar el puerto de Apache a 82

Editar el archivo de configuración de Apache:

sudo nano /etc/apache2/ports.conf

Cambia la línea:
Listen 80
por: Listen 82

Reiniciar Apache para aplicar los cambios:

sudo service apache2 restart


E. Instalar el Servidor de Aplicaciones Tomcat

Instalar Java (requerido por Tomcat):

sudo apt-get install default-jdk

Descargar Tomcat

cd /opt
sudo wget https://downloads.apache.org/tomcat/tomcat-11/v11.0.XX/bin/apache-tomcat-11.0.0.tar.gz

Descomprimir Tomcat:

sudo tar -xvzf apache-tomcat-11.0.0.tar.gz


Renombrar el directorio

sudo mv apache-tomcat-11.0.0 tomcat


Iniciar Tomcat:

cd /opt/tomcat/bin
sudo ./startup.sh


Verificar que Tomcat está funcionando:

Abre un navegador y accede a:

http://localhost:8080



