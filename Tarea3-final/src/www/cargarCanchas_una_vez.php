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
    [
        'nombre' => 'A Grito de Gol', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha1.jpg', 
        'descripcion' => 'Cancha techada con césped sintético, ideal para partidos de fútbol 5 bajo techo, equipada con iluminación LED.'
    ], 
    [
        'nombre' => 'Complejo Deportivo Tiro Libre', 
        'descripcionImagen' => './imagenes/descripcion2.png', 
        'imagen' => './imagenes/cancha2.jpg',
        'descripcion' => 'Complejo deportivo con varias canchas disponibles, perfecto para torneos y eventos deportivos al aire libre.'
    ],
    [
        'nombre' => 'La Cañada F5', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha3.jpg',
        'descripcion' => 'Cancha con césped sintético de alta calidad, ubicada en un entorno natural rodeado de árboles y naturaleza.'
    ],
    [
        'nombre' => 'Complejo Deportivo FMG', 
        'descripcionImagen' => './imagenes/descripcion2.png', 
        'imagen' => './imagenes/cancha4.jpg',
        'descripcion' => 'Complejo con canchas de fútbol 5 y 7, cuenta con servicios adicionales como vestuarios y bar.'
    ],
    [
        'nombre' => 'Pando Fútbol 5', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha5.jpg',
        'descripcion' => 'Ubicado en el corazón de Pando, esta cancha ofrece espacios amplios para entrenamientos y partidos casuales.'
    ],
    [
        'nombre' => 'Sale 5', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha6.jpg',
        'descripcion' => 'Espacio moderno y bien iluminado para fútbol 5, ideal para partidos nocturnos y eventos empresariales.'
    ],
    [
        'nombre' => 'Complejo Deportivo Ruta 48', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha7.jpg',
        'descripcion' => 'Complejo deportivo ubicado sobre la Ruta 48, con amplias instalaciones para la práctica de fútbol y otros deportes.'
    ],
    [
        'nombre' => 'Complejo Fútbol 5 Cruces', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha8.jpg',
        'descripcion' => 'Cancha techada, perfecta para días de lluvia. Ofrece un ambiente competitivo con excelentes instalaciones.'
    ],
    [
        'nombre' => 'Complejo Gol de Oro', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha9.jpg',
        'descripcion' => 'Cancha de césped sintético, con iluminación LED y espacio para espectadores. Ideal para partidos de fútbol 5.'
    ],
    [
        'nombre' => 'Área Fútbol 5', 
        'descripcionImagen' => './imagenes/descripcion1.png', 
        'imagen' => './imagenes/cancha10.jpg',
        'descripcion' => 'Cancha especializada en fútbol 5, con césped artificial de última generación y vestuarios disponibles para los equipos.'
    ],
];




/* Insertamos los datos de la coleccion en la tabla */
foreach ($canchas as $c) {
    $sql = "INSERT INTO Canchas (nombre, descripcionImagen, imagen, descripcion) 
            VALUES ('".$c['nombre']."', '".$c['descripcionImagen']."', '".$c['imagen']."', '".$c['descripcion']."')";

    if ($instanciaConexion->query($sql) === TRUE) {
        echo "Nueva cancha creada correctamente<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
    }


    
}
$instanciaConexion->close();
?>