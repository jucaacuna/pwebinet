#!/bin/bash


####################################################################
#               Srcipt para configurarr el servidor 1              #
####################################################################
# Se debe correr con sudo. 

echo "0 - configuramos el nombre del server"
# Es de esperar que el nombre del servidor quede configurado en la instalación,
# pero puede ser que no haya quedado o que se reutilice una imagen de otra práctica,
# de ahí la utilidad de este paso.
hostnamectl set-hostname server1

echo "1 - actualicemos el índice de software"
# Simplemente para asegurarnos de trabajar con las últimas versiones,
# al instalar software en los próximos pasos.
# No instalaremos actualizaciones (upgrade) ya que de ser necesaria algua dependecia,
# se solicitará durante la instalacción de la app específica.
apt update

echo "2 - instalamos el server apache: "
# El servidor web que servirá para mostrar contenido web (html, css, etc) y manejar
# las solicitudes. Por defecto, queda en el puerto 80, y el resto de la configuraciones
# se adaptan a las necesidades el proyecto, por lo que no se hace ningún otro cambio. 
apt install apache2 -y

echo "3 - cambiamos permisos en /var/www/html para que este usuario sea propietario: "
# Para poder trabajar en la carpeta raíz desde nuestro usuario, sin necesidad de andar 
# escalando privilegios con sudo. 
chown -R $USER:$USER /var/www/html ############### NO HACE CASO EN EL SCRIPT, SI EN TERMINAL.

echo "Ahora instalamos PHP"
apt install php -y

