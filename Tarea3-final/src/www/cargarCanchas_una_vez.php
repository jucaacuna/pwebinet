<?php
/* ESTE ES UN SCRIPT PARA CORRER UNA ÚNICA VEZ PARA CARGAR LOS DATOS DE LAS CANCHAS EN LA BASE DE DATOS.
PREVIAMENTE SE DEBE CREAR LA BASE DE DATOS. */


/*      Importar la conexión       */

require_once 'conexionBD.php'; 

    


/* Verificar la conexión   */

if ($instanciaConexion->connect_error) {
    die("Conexión fallida: " . $instanciaConexion->connect_error); 

}

/* Creamos la coleccion con las canchas a cargar. */
$canchas = [
    ['nombre' => 'A Grito de Gol', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha1.jpg'], 
    //CARLOS: agregar un campo más en cada cancha que sea 'descripcio' => 'texto de la imagen'
    // con esto se lo pongo automaticamente como atributo alt en la imagen para que quede mas proli.
    ['nombre' => 'Complejo Deportivo Tiro Libre', 'descripcionImagen' => './imagenes/descripcion2.png', 'imagen' => './imagenes/cancha2.jpg'],
    ['nombre' => 'La Cañada F5', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha3.jpg'],
    ['nombre' => 'Complejo Deportivo FMG', 'descripcionImagen' => './imagenes/descripcion2.png', 'imagen' => './imagenes/cancha4.jpg'],
    ['nombre' => 'Pando Fútbol 5', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha5.jpg'],
    ['nombre' => 'Sale 5', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha6.jpg'],
    ['nombre' => 'Complejo Deportivo Ruta 48', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha7.jpg'],
    ['nombre' => 'Complejo Fútbol 5 Cruces', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha8.jpg'],
    ['nombre' => 'Complejo Gol de Oro', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha9.jpg'],
    ['nombre' => 'Área Fútbol 5', 'descripcionImagen' => './imagenes/descripcion1.png', 'imagen' => './imagenes/cancha10.jpg'],
    
];

/* Insertamos los datos de la coleccion en la tabla */
foreach ($canchas as $c) {
    $sql = "INSERT INTO Canchas (nombre, descripcionImagen, imagen) 
            VALUES ('".$c['nombre']."', '".$c['descripcionImagen']."', '".$c['imagen']."')";

    if ($instanciaConexion->query($sql) === TRUE) {
        echo "Nueva cancha creada correctamente<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
    }


    
}
$instanciaConexion->close();
?>