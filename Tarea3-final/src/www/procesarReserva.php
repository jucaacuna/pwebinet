<?php
/* En este modulo estan todos los metodos necesarios para completar la reserva de una cancha. 
    Se reciben las comunicaciones POST del formulario. ¿Y los get para pedir datos sobre disponibilidades?
    Esto último puede estar en otro módulo e importarse desde este...  */
    
principal();


function principal(){
    if (isset($_POST['idCliente']) & isset($_POST['hora_inicio']) & isset($_POST['hora_finalizacion']) & isset($_POST['password'])){ 
        // El programa se correo SOLO SI se ingreso texto Y se marco una opcion. Es decir, si no se envio el formulario,
        // no se corre este programa.
      $idCliente = $_POST['idCliente'];
      $password = $_POST['password']; // chequear con la base de datos antes de seguir. Login
      $dia = $_POST['dia'];
      $hora_inicio = $_POST['hora_inicio'];
      $hora_fin = $_POST['hora_finalizacion'];
      $idCancha = 1;
      $fecha_reserva = "2024-09-27";
      if(esta_registrado($idCliente,$password)){
        echo "Usted es el cliente {$idCliente} y reservo  para el {$dia} de {$hora_inicio} a {$hora_fin}.";



        /*      Importar la conexión       */

        require 'conexionBD.php'; 

        /* Insertamos los datos deL formulario en la tabla Reservas. */

        $sql = "INSERT INTO Reservas (idCliente, hora_inicio, hora_fin, idCancha, fecha_reserva) 
                VALUES ('".$idCliente."', '".$hora_inicio."', '".$hora_fin."', '".$idCancha."', '".$fecha_reserva."')";

        if ($instanciaConexion->query($sql) === TRUE) {
            echo "Reserva registrada correctamente.<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
        }
        /* Falta capturar la excepcion para telefono duplicado. */
    
        
    
    $instanciaConexion->close();
    }
      }
 
}

function esta_registrado($usuario,$pass){
    $retorno = false;
    /*      Importar la conexión       */

    require 'conexionBD.php';

    if ($instanciaConexion->connect_error) {
        die("Conexión fallida: " . $instanciaConexion->connect_error); 
    
    } else {
    
    // RETORNAR TRUE SI EXISTE EN LA BASE DE DATOS
    // Consulta SQL para verificar el usuario
    $sql = "SELECT * FROM Clientes WHERE idCliente = ?";
    $stmt = $instanciaConexion->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        // Usuario encontrado
        $row = $result->fetch_assoc();
        
        // Verificar la contraseña
        if (password_verify($pass, $row['password'])) {
            $retorno = true;

        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "El usuario no está registrado.";
    }
    

    
    }
    $stmt->close();
    $instanciaConexion->close();
    return $retorno;

}
?>