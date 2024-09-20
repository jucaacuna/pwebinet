#!/bin/bash


####################################################################
#               Srcipt para configurarr el servidor 2              #
####################################################################

echo "Ahora actualicemos el índice de software"
sudo apt update

echo "Ahora instalamos el server ftp "
sudo apt install vsftpd -y


#echo "Ahora configuramos el server ftp "
#wget direccion del archivo vsftpd.conf en github (CARGAR EL DE SERVER 2 ACTUAL)
#mv acá para allá y sobreescribir el que está.
# cambios efectivamente realizados: descomenté write_enable=yes


echo "Ahora reiniciamos el server ftp "
systemctl restart vsftpd