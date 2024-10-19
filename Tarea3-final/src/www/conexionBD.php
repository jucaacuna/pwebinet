<?php
/* En este modulo se centraliza la declaracion de la instancia de la conexion.
 Solo debe de existir esta e importarse desde los distintos puntos a consultar la bd. */


/*      Crear la conexión       */

$instanciaConexion = new mysqli("serverBD", "root", "jaja", "futbol5");
/* En ejercicios anteriores la conexion se hizo con un enfoque estructurado. Usando mysqli_connect().
 En este, usamos uno enfocado a POO, creando una insancia de la clase mysqli. */

?>