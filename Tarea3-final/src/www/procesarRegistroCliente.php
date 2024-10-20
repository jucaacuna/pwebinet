<?php
/* En este modulo estan todos los metodos necesarios para completar la reserva de una cancha. 
    Se reciben las comunicaciones POST del formulario. Se valida que esten ingresados todos los campos,
    de lo contrario no se procesa la reserva.  */
    



function principal(){
    /* isset() Determina si una variable está definida y no es null. No verifica que no sea vacia.
     Si son pasados varios parámetros, entonces isset() devolverá true únicamente si todos los parámetros están definidos. */
    if (isset($_POST['nombre'], $_POST['apellido'], $_POST['telefono'], $_POST['password']) && 
    
    /* Determina si una variable es considerada vacía. empty() no genera una advertencia si la variable no existe.  */
    !empty($_POST['nombre']) && !empty($_POST['apellido']) && !empty($_POST['telefono']) && !empty($_POST['password'])){
        


        $nombre = $_POST['nombre']; //el array $_POST[] tiene todos los elementos recibidos por metodo POST.
        // Se corresponde la clave en el array con el nombre de la variable en el formulario.
        $apellido = $_POST['apellido'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];
        $password = password_hash($password, PASSWORD_DEFAULT); //Usa el algoritmo bcrypt para almacenar la contrasenia de manera segura. Manual php recomienda usar en la bd un campo de 255 caracteres.
    
        
        /*      Importar la conexión       */

        require_once 'conexionBD.php';

        /* Insertamos los datos deL formulario en la tabla Clientes.*/
        $sql = "INSERT INTO Clientes (nombre, apellido, telefono, password) 
                    VALUES ('".$nombre."', '".$apellido."', '".$telefono."', '".$password."')";

        if ($instanciaConexion->query($sql) === TRUE) {
            echo "Cliente registrado correctamente<br>";
        } else {
            echo "Error: " . $sql . "<br>" . $instanciaConexion->error;
        }
    
        
    
    $instanciaConexion->close();
    }
}

principal();
?>