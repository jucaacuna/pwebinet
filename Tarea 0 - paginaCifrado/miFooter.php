<?php
/*Este modulo es para contener el footer de la pagina y no tener que sobreescribirlo en cada subpagina. */
echo 
    "<footer>
        <address>
        Autor: Juan Acuña.<br>
        Direccion: Canelones, Uruguay.<br>
        </address> 
        <ul id = \"ips\">
            <li> Estamos funcionando desde: {$_SERVER['SERVER_ADDR']} </li> 
            <li> Usted nos visita desde: {$_SERVER['REMOTE_ADDR']} {$_SERVER['HTTP_X_APPENGINE_USER_IP']}</li> 
        </ul>
    </footer>";
    /* Con {} se contiene la variable dentro del string. Y con \" se puede escapar para poder usar la comilla como parte del contenido del String.*/
    // la segunda opcion {$_SERVER['HTTP_X_APPENGINE_USER_IP']} es para gcloud.
?>