<?php
/* ESTE ES UN SCRIPT PARA CORRER UNA UNICA VEZ PARA CARGAR LOS DATOS DE LAS CANCHAS EN LA BASE DE DATOS. */


/*      Crear la conexión       */

/* En ejercicios anteriores la conexion se hizo con un enfoque estructurado. Usando mysqli_connect().
 En este, usamos uno enfocado a POO, creando una insancia de la clase mysqli. */

$instanciaConexion = new mysqli("serverBD", "root", "jaja", "futbol5");

    


/* Verificar la conexión   */

if ($instanciaConexion->connect_error) {
    die("Conexión fallida: " . $instanciaConexion->connect_error); 

}

/* Creamos la coleccion con las canchas a cargar. */
$canchas = [
    ['nombre' => 'CAL Canelones', 'descripcion' => 'La mejor cancha', 'imagen' => './imagenes/cancha1.jpg'], //LUEGO: AGREGAR GPS de momento puede ser null.
    ['nombre' => 'BBC', 'descripcion' => 'La mas centrica de Sauce', 'imagen' => './imagenes/cancha2.jpg'],
    ['nombre' => 'Locos por el futbol', 'descripcion' => 'Tenga en cuenta que hay parrillero.', 'imagen' => './imagenes/cancha1.jpg'],
    ['nombre' => 'C4', 'descripcion' => 'La peor cancha', 'imagen' => './imagenes/cancha1.jpg'],
    ['nombre' => 'C5 Canelones', 'descripcion' => 'jejeje', 'imagen' => './imagenes/cancha2.jpg'],
    ['nombre' => 'C6 Canelones', 'descripcion' => 'jejeje', 'imagen' => './imagenes/cancha1.jpg'],
    ['nombre' => 'C7 Canelones', 'descripcion' => 'jejeje', 'imagen' => './imagenes/cancha2.jpg'],
    ['nombre' => 'C8 Canelones', 'descripcion' => 'jejeje', 'imagen' => './imagenes/cancha1.jpg'],
    ['nombre' => 'C9 Canelones', 'descripcion' => 'jejeje', 'imagen' => './imagenes/cancha2.jpg'],
    ['nombre' => 'C1 Canelones', 'descripcion' => 'jejeje', 'imagen' => './imagenes/cancha1.jpg'],
    
];

/* Insertamos los datos de la coleccion en la tabla */
foreach ($canchas as $c) {
    $sql = "INSERT INTO Canchas (nombre, descripcion, imagen) 
            VALUES ('".$c['nombre']."', '".$c['descripcion']."', '".$c['imagen']."')";

    if ($instanciaConexion->query($sql) === TRUE) {
        echo "Nueva cancha creada correctamente<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
    }


    
}
$instanciaConexion->close();
?>