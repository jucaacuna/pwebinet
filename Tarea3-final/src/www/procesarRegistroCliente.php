<?php
/* En este modulo estan todos los metodos necesarios para completar la reserva de una cancha. 
    Se reciben las comunicaciones POST del formulario. ¿Y los get para pedir datos sobre disponibilidades?
    Esto último puede estar en otro módulo e importarse desde este...  */
    
principal();


function principal(){
    if (isset($_POST['nombre']) & isset($_POST['apellido']) & isset($_POST['telefono'])){
        
        // El programa se correo SOLO SI se ingreso texto Y se marco una opcion. Es decir, si no se envio el formulario,
        // no se corre este programa.
        $nombre = $_POST['nombre']; //el array $_POST[] tiene todos los elementos recibidos por metodo POST.
        // Se corresponde la clave en el array con el nombre de la variable en el formulario.
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        
    
        
        /*      Importar la conexión       */

        require_once 'conexionBD.php';

        /* Insertamos los datos deL formulario en la tabla Clientes.*/
        $sql = "INSERT INTO Clientes (nombre, apellido, telefono) 
                    VALUES ('".$nombre."', '".$apellido."', '".$telefono."')";

        if ($instanciaConexion->query($sql) === TRUE) {
            echo "Cliente registrado correctamente<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
        }
        /* Falta capturar la excepcion para telefono duplicado. */
    
        
    
    $instanciaConexion->close();
    }
}
?>