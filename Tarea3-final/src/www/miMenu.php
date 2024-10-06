<?php
/*Este modulo es para contener el header y menu de la pagina y no tener que sobreescribirlo en cada subpagina. */

echo
    '<header>
        <img src="./imagenes/portada_principal.jpg" alt="Portada Principal de Canchas" class="portada-principal"> <!-- Imagen de portada -->
    </header>
    <nav>
        <ul>
            <li> <a href="./">INICIO</a></li>
            <li> <a href="./canchas.php">CANCHAS</a></li>
            <li> <a href="./listas.php">LISTAS</a></li>
            <li> <a href="./registrarCliente.php">REGISTRAR CLIENTE</a></li>
            <li> <a href="./reservar.php">RESERVAR</a></li>
        </ul>
    </nav>
    ';
    
    


?>