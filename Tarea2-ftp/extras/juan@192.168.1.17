#!/bin/bash


####################################################################
#               Srcipt para configurarr el servidor 1              #
####################################################################


echo "Ahora actualicemos el índice de software"
sudo apt update

echo "Ahora instalamos el server apache: "
sudo apt install apache2 -y

echo "Ahora cambiamos permisos en /var/www/html para este usuario sea propietario: "
sudo chown -R $USER:$USER /var/www/html

echo "Ahora instalamos PHP"
apt install php -y

