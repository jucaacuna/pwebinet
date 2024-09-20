<?php

$ftp_server = "192.168.1.12";
$ftp_username = "juan";
$ftp_password = "1234567890";



function listarArchivos($ftp_server, $ftp_username, $ftp_password){
    $conexionFTP = ftp_connect($ftp_server,21) or die("Hay un temita con el servidor... ERROR.");
    $login = ftp_login($conexionFTP,$ftp_username,$ftp_password);
    $listaArchivos = ftp_rawlist($conexionFTP, ".");

    echo '
    <h2> ARCHIVOS EN SERVER 2</h2>
    <ol>';
    foreach($listaArchivos as $archivo){
        echo "<li> $archivo </li>";
    }
    echo '</ol>';

    ftp_close($conexionFTP);

}



?>
