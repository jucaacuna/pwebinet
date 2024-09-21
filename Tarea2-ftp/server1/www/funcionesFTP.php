<?php
/* En este archivo se centralizan todas las funciones necesarias para operar desde
 este servidor apache hacia el servidor ftp.
 */

/* Estas variables no se declaran solo una vez para identificar al servidor php. */
$ftp_server = "192.168.1.19";
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

function subirArchivo($ftp_server, $ftp_username, $ftp_password){
       
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $conexionFTP = ftp_connect($ftp_server,21) or die("Hay un temita con el servidor... ERROR.");
        $login = ftp_login($conexionFTP,$ftp_username,$ftp_password);

        if($login){

            $archivo = $_FILES["fileToUpload"]["tmp_name"];
            $nombre_destino = $_FILES["fileToUpload"]["name"];

            if(ftp_put($conexionFTP, $nombre_destino, $archivo)){
                echo "<h2>Archivo subido con éxito.</h2>";
            } else {
                echo "<h2>ERROR CON EL ARCHIVO</h2>";
            }

        }
        ftp_close($conexionFTP);

    }

}



?>
