<?php
/* En este modulo estan todos los metodos necesarios para completar la reserva de una cancha. 
    Se reciben las comunicaciones POST del formulario. ¿Y los get para pedir datos sobre disponibilidades?
    Esto último puede estar en otro módulo e importarse desde este...  */
    
principal();


function principal(){
    /* El programa se correo SOLO SI se completaron los campos del formulario. 
    No responde si NO se completaron. */
    
    if (isset($_POST['idCliente']) & isset($_POST['horario']) &
      isset($_POST['password']) &
        isset($_POST['dia']) & isset($_POST['cancha'])){ 
        
      $idCliente = $_POST['idCliente'];
      $password = $_POST['password']; // chequear con la base de datos antes de seguir. Login
      $dia = $_POST['dia'];
      $horario = $_POST['horario'];
      $idCancha = $_POST['cancha'];
      $fecha_reserva = $_POST['dia'];

      /* Se procesa la reserva solo si usuario y contrasenia son correctos. */
      if(esta_registrado($idCliente,$password)){
        echo "Usted es el cliente {$idCliente} y reservo  para el {$dia} en {$horario}.";



        /*      Importar la conexión       */

        require 'conexionBD.php'; 

        /* Insertamos los datos deL formulario en la tabla Reservas. */

        $sql = "INSERT INTO Reservas (idCliente, horario, idCancha, fecha_reserva) 
                VALUES ('".$idCliente."', '".$horario."', '".$idCancha."', '".$fecha_reserva."')";

        if ($instanciaConexion->query($sql) === TRUE) {
            echo "Reserva registrada correctamente.<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
        }
    
        
    
    $instanciaConexion->close();
    }
      }
 
}

/* Esta funcion retorna TRUE si existe en la BD ese par usuario y password. Caso contrario, retorna FALSE. */
function esta_registrado($usuario,$pass){
    $retorno = FALSE;

    /*      Importar la conexión       */

    require 'conexionBD.php';

    /* Capturo caso fallido de conexion*/
    if ($instanciaConexion->connect_error) {
        die("Conexión fallida: " . $instanciaConexion->connect_error); 
    
    } else {
    

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
            $retorno = TRUE;

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