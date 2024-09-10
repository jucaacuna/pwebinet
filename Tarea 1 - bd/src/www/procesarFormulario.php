<?php 

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$instanciaConexion = mysqli_connect("serverBD", "root", "jaja", "escuela");


$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$curso = $_POST['curso'];
$email = $_POST['email'];



$consultaBD = "INSERT INTO estudiantes(nombre, edad, curso, email) VALUES('$nombre', '$edad', '$curso', '$email')";

$resultadoConsulta = mysqli_query($instanciaConexion, $consultaBD);


?>