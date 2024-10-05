<?php
/* En este modulo estan todos los metodos necesarios para completar la reserva de una cancha. 
    Se reciben las comunicaciones POST del formulario. ¿Y los get para pedir datos sobre disponibilidades?
    Esto último puede estar en otro módulo e importarse desde este...  */
    
principal();


function principal(){
    if (isset($_POST['idCliente']) & isset($_POST['hora_inicio']) & isset($_POST['hora_finalizacion'])){ 
        // El programa se correo SOLO SI se ingreso texto Y se marco una opcion. Es decir, si no se envio el formulario,
        // no se corre este programa.
      $idCliente = $_POST['idCliente']; //el array $_POST[] tiene todos los elementos recibidos por metodo POST.
      // Se corresponde la clave en el array con el nombre de la variable en el formulario.
      $dia = $_POST['dia'];
      $hora_inicio = $_POST['hora_inicio'];
      $hora_fin = $_POST['hora_finalizacion'];
      $idCancha = 1;
      $fecha_reserva = "2024-09-27";
      
      echo "Usted es el cliente {$idCliente} y reservo  para el {$dia} de {$hora_inicio} a {$hora_fin}.";



        /*      Importar la conexión       */

        require_once 'conexionBD.php'; 

        /* Insertamos los datos deL formulario en la tabla Reservas. */

        $sql = "INSERT INTO Reservas (idCliente, hora_inicio, hora_fin, idCancha, fecha_reserva) 
                VALUES ('".$idCliente."', '".$hora_inicio."', '".$hora_fin."', '".$idCancha."', '".$fecha_reserva."')";

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