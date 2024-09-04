<?php
/*Este modulo es para contener el footer de la pagina y no tener que sobreescribirlo en cada subpagina. */
echo 
    "<footer>
        <address>
        Autor: Juan Acuña.<br>
        </address> 
        <ul id = \"ips\">
            <li> Estamos funcionando desde: {$_SERVER['SERVER_ADDR']} </li> 
            <li> Usted nos visita desde: {$_SERVER['REMOTE_ADDR']}</li> 
        </ul>
    </footer>";
?>