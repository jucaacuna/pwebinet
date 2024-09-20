#!/bin/bash


####################################################################
# Srcipt para instalar el servidor apache y poder correr el sitio. #
####################################################################

echo "Ahora actualicemos el índice de software"
sudo apt update

echo "Ahora instalamos el server: "
sudo apt install apache2 -y

echo "Ahora cambiamos permisos en /var/www/html: "
sudo chown -R $USER:$USER /var/www/html

echo "Ahora importamos la página desde git: "
cd /var/www/html
git clone https://github.com/jucaacuna/pwebinet.git

echo "Ahora instalamos PHP en el server"

apt install php -y
