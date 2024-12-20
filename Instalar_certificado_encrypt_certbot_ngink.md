

1. Instalar Certbot y el complemento para Nginx
Primero, asegúrese de que Certbot esté instalado. En Ubuntu/Debian, ejecuta:

sudo apt update
sudo apt install certbot python3-certbot-nginx

2. Verifica tu configuración de Nginx
Asegúrese de que los archivos de configuración para sus hosts virtuales estén correctamente configurados en /etc/nginx/sites-available/. Cada host virtual debería tener algo similar a esto:

server {
    server_name empresa1.com www.empresa1.com;
    root /var/www/empresa1;
    
    index index.html index.htm index.php;

    location / {
        try_files $uri $uri/ =404;
    }
}

Hazlo mismo para empresa2.com empresa3.com. Pruebe la configuración para asegurarte de que no hay errores:

sudo nginx -t

Si todo está bien, recarga Nginx:

sudo systemctl reload nginx

3. Solicitar certificados SSL
Usa Certbot para emitir certificados para cada dominio. Por ejemplo, para empresa1.com:

sudo certbot --nginx -d empresa1.com -d www.empresa1.com
Repite el comando para empresa2.comy empresa3.comreemplazando los dominios:

sudo certbot --nginx -d empresa2.com -d www.empresa2.com
sudo certbot --nginx -d empresa3.com -d www.empresa3.com

Certbot detectará la configuración de Nginx y actualizará automáticamente los bloques serverpara incluir SSL. Verifica que se añaden líneas similares a estas en cada archivo de configuración del host virtual:

server {
    server_name empresa1.com www.empresa1.com;
    root /var/www/empresa1;

    listen 443 ssl; # Puerto HTTPS
    ssl_certificate /etc/letsencrypt/live/empresa1.com/fullchain.pem;
    ssl_certificate_key /etc/letsencrypt/live/empresa1.com/privkey.pem;

    location / {
        try_files $uri $uri/ =404;
    }
}

server {
    listen 80;
    server_name empresa1.com www.empresa1.com;
    return 301 https://$host$request_uri; # Redirige HTTP a HTTPS
}

4. Probar los certificados

Una vez configurados los certificados, prueba que los dominios están sirviendo correctamente con HTTPS visitándolos en el navegador:

https://empresa1.com
https://empresa2.com
https://empresa3.com
