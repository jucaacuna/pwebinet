<?php
/*Este modulo es para contener el footer de la pagina y no tener que sobreescribirlo en cada subpagina. */
echo 
    "<footer>
        <address>
        Contacto:
        <a href='mailto:yo@yo.uy'>email</a>.<br>
        Direccion: Canelones, Uruguay.<br>
        </address> 
        <p> Estamos funcionando desde: {$_SERVER['SERVER_ADDR']} </p> 
    </footer>";
    /* Con {} se contiene la variable dentro del string. Y con \" se puede escapar para poder usar la comilla como parte del contenido del String.*/

?>