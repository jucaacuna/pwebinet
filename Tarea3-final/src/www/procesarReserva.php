<?php
/* En este modulo estan todos los metodos necesarios para completar la reserva de una cancha. 
    Se reciben las comunicaciones POST del formulario. ¿Y los get para pedir datos sobre disponibilidades?
    Esto último puede estar en otro módulo e importarse desde este...  */
    
principal();


function principal(){
    if (isset($_POST['nombre']) & isset($_POST['apellido']) & isset($_POST['telefono']) & isset($_POST['dia'])){ 
        // El programa se correo SOLO SI se ingreso texto Y se marco una opcion. Es decir, si no se envio el formulario,
        // no se corre este programa.
      $nombre = $_POST['nombre']; //el array $_POST[] tiene todos los elementos recibidos por metodo POST.
      // Se corresponde la clave en el array con el nombre de la variable en el formulario.
      $apellido = $_POST['apellido'];
      $telefono = $_POST['telefono'];
      $dia = $_POST['dia'];
      echo "Usted se llama {$nombre} {$apellido}, su numero es {$telefono} y reservo para el dia: {$dia}";
    }
}
?>