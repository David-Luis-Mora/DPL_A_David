nano /etc/nginx/sites-available/empresa1.com
 Introducimos
 server {
    listen 80;
    listen [::]:80;

    root /var/www/empresa1.com;
    index index.html index.htm;

    server_name empresa1.com www.empresa1.com;

    location / {
        try_files $uri $uri/ =404;
    }
}

nano /etc/nginx/sites-available/empresa2.com

server {
    listen 80;
    listen [::]:80;

    root /var/www/empresa2.com;  # Asegúrate de que este root apunte al directorio correcto
    index index.html index.htm;

    server_name empresa2.com www.empresa2.com;

    location / {
        try_files $uri $uri/ =404;
    }
}

nano  /etc/nginx/sites-available/empresa3.com
Introducimos en el arcivo
server {
    listen 80;
    listen [::]:80;

    root /var/www/empresa3.com;  # Asegúrate de que este root apunte al directorio correcto
    index index.html index.htm;

    server_name empresa3.com www.empresa3.com;

    location / {
        try_files $uri $uri/ =404;
    }
}

sudo ln -s /etc/nginx/sites-available/empresa1.com /etc/nginx/sites-enabled/

sudo ln -s /etc/nginx/sites-available/empresa2.com /etc/nginx/sites-enabled/
sudo ln -s /etc/nginx/sites-available/empresa3.com /etc/nginx/sites-enabled/

sudo ls -l /etc/nginx/sites-enabled/

lrwxrwxrwx 1 root root 39 dic  7 15:46 empresa1.com -> /etc/nginx/sites-available/empresa1.com
lrwxrwxrwx 1 root root 39 dic  7 15:46 empresa2.com -> /etc/nginx/sites-available/empresa2.com
lrwxrwxrwx 1 root root 39 dic  7 15:46 empresa3.com -> /etc/nginx/sites-available/empresa3.com


sudo nginx -t

sudo systemctl restart nginx


ls -l /var/www/empresa1.com
ls -l /var/www/empresa2.com
ls -l /var/www/empresa3.com



sudo chown -R www-data:www-data /var/www/empresa1.com
sudo chmod -R 755 /var/www/empresa1.com

sudo chown -R www-data:www-data /var/www/empresa2.com
sudo chmod -R 755 /var/www/empresa2.com

sudo chown -R www-data:www-data /var/www/empresa3.com
sudo chmod -R 755 /var/www/empresa3.com


nano /etc/hosts

Introducimos
127.0.0.1       empresa1.com www.empresa1.com
127.0.0.1       empresa2.com www.empresa2.com
127.0.0.1       empresa3.com www.empresa3.com



