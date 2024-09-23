#!/bin/bash


####################################################################
#               Srcipt para configurarr el servidor 2              #
####################################################################
# Se debe correr con sudo. 


echo "0 - configuramos el nombre del server"
# Es de esperar que el nombre del servidor quede configurado en la instalación,
# pero puede ser que no haya quedado o que se reutilice una imagen de otra práctica,
# de ahí la utilidad de este paso.
hostnamectl set-hostname server2

echo "1 - actualicemos el índice de software"
# Simplemente para asegurarnos de trabajar con las últimas versiones,
# al instalar software en los próximos pasos.
# No instalaremos actualizaciones (upgrade) ya que de ser necesaria algua dependecia,
# se solicitará durante la instalacción de la app específica.
apt update

echo "2 -  instalamos el server ftp "
apt install vsftpd -y


echo "3 - configuramos el server ftp "
# Para evitar el camino de editar el archivo a mano y aspirar a la automatización
# con este script, se descarga un archivo (configurado y creado como parte del
# ejercicio) para reemplazar el actual.
# El único cambio que contiene, de momento: se descomentó write_enable=yes.  
# No se crea usuaro específico para
# este servicio, ya que podrá usar cualquier usuario del sistema.
# Esto es inseguro en un ambiente real, pero práctico en nuestro ambiente local
# y contenido.
wget https://raw.githubusercontent.com/jucaacuna/pwebinet/refs/heads/main/Tarea2-ftp/server2/vsftpd.conf
mv ./vsftpd.conf /etc/vsftpd.conf


echo "Ahora reiniciamos el server ftp "
systemctl restart vsftpd
