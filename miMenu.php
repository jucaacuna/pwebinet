<?php
/*Este modulo es para contener el header y menu de la pagina y no tener que sobreescribirlo en cada subpagina. */
echo 
    "<header>
        <h1> {$titulo} </h1>
    </header>";
echo
    '<nav>
        <ul>
            <li> <a href="./">INICIO</a></li>
            <li> <a href="./cesar.php"> CESAR</a></li>
            <li> <a href="./a1z26.php"> A1Z26</a></li>
        </ul>
    </nav>';
    
    


?>