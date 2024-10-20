<?php
/* Este modulo es utilizado unicamente por el script reserva.js 
para listar disponibilidad de horas en el formulario de reserva de canchas. */

    //Aca se importa el modulo que tiene la funciona invocada mas abajo. 
    require_once 'listar.php';

    if (isset($_POST['dia']) && isset($_POST['cancha'])) {
        $dia = $_POST['dia'];
        $cancha = $_POST['cancha'];

        // Aquí llamas a la función que retorna las horas disponibles
        listar_horas_disponibles_de_una_cancha($cancha, $dia);
    } else {
        echo "Error: faltan datos.";
    }
?>