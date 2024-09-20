<?php




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $ftp_server = "192.168.1.12";
    $ftp_username = "juan";
    $ftp_password = "1234567890";
    $conexionFTP = ftp_connect($ftp_server,21) or die("Hay un temita con el servidor... ERROR.");
    $login = ftp_login($conexionFTP,$ftp_username,$ftp_password);

    if($login){

        $archivo = $_FILES["fileToUpload"]["tmp_name"];
        $nombre_destino = $_FILES["fileToUpload"]["name"];

        if(ftp_put($conexionFTP, $nombre_destino, $archivo)){
            echo "Archivo subido exitosamente";
        } else {
            echo "ERROR CON EL ARCHIVO";
        }

    }
    ftp_close($conexionFTP);

}

?>