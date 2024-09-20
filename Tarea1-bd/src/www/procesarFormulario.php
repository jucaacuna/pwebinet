<?php 
mensaje();

function mensaje(){
    if (isset($_POST['nombre']) & isset($_POST['edad']) & isset($_POST['curso']) & isset($_POST['email'])){ // El programa se correo SOLO SI se ingresaron todas las opciones. Es decir, si no se envio el formulario, no se corre este programa.
       
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $instanciaConexion = mysqli_connect("serverBD", "root", "jaja", "escuela");


        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $curso = $_POST['curso'];
        $email = $_POST['email'];

        $consultaBD = "INSERT INTO estudiantes(nombre, edad, curso, email) VALUES('$nombre', '$edad', '$curso', '$email')";

        $resultadoConsulta = mysqli_query($instanciaConexion, $consultaBD);

        if($resultadoConsulta){
            print("SE INGRESO INFORMACION CON ÉXITO");

        }

    }
}


?>