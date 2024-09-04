<?php


// ############################################### SECUENCIA DE CONTROL DEL PROGRAMA ###############


principal();



// ############################################### FUNCIONES #######################################

//Esta funcion es pensando en la seguridad... para que el usuario no inyecte código en el string.
function validarInput($var){

    $var = strip_tags($var); // le saca las etiquetas html
    $var = htmlentities($var); // si quedo alguna etiqueta, la transforma para que no sea mas una etqueta.
    return $var;
}


function encriptar (string $msj){
    $msj = str_replace(array('a','A'), "1-", $msj);
    $msj = str_replace(array('b','B'), "2-", $msj);
    $msj = str_replace(array('c','C'), "3-", $msj);
    $msj = str_replace(array('d','D'), "4-", $msj);
    $msj = str_replace(array('e','E'), "5-", $msj);
    $msj = str_replace(array('f','F'), "6-", $msj);
    $msj = str_replace(array('g','G'), "7-", $msj);
    $msj = str_replace(array('h','H'), "8-", $msj);
    $msj = str_replace(array('i','I'), "9-", $msj);
    $msj = str_replace(array('j','J'), "10-", $msj);
    $msj = str_replace(array('k','K'), "11-", $msj);
    $msj = str_replace(array('l','L'), "12-", $msj);
    $msj = str_replace(array('m','M'), "13-", $msj);
    $msj = str_replace(array('n','N'), "14-", $msj);
    $msj = str_replace(array('o','O'), "15-", $msj);
    $msj = str_replace(array('p','P'), "16-", $msj);
    $msj = str_replace(array('q','Q'), "17-", $msj);
    $msj = str_replace(array('r','R'), "18-", $msj);
    $msj = str_replace(array('s','S'), "19-", $msj);
    $msj = str_replace(array('t','T'), "20-", $msj);
    $msj = str_replace(array('u','U'), "21-", $msj);
    $msj = str_replace(array('v','V'), "22-", $msj);
    $msj = str_replace(array('w','W'), "23-", $msj);
    $msj = str_replace(array('x','X'), "24-", $msj);
    $msj = str_replace(array('y','Y'), "25-", $msj);
    $msj = str_replace(array('z','Z'), "26-", $msj);
    return $msj;
}

function imprimir($m, $c, $t, $o) { /* El output del algotimo queda contenido en un div, inexistente antes de procesar.*/
    echo "
    <div id=\"salidaAlgoritmo\"> 
    <h2>MODULO DE CIFRADO</h2> 
    Su mensaje: <strong> $m </strong> <br/><br/>
    Conteo de incidencias en el mensaje: <br/>"; 


    foreach (count_chars($m, 1) as $caracter => $incidencia) {
        echo "Hay $incidencia incidencias de \"" , chr($caracter) , "\" en el mensaje. <br/>";
     }
     echo "<hr/>";

    echo "Criptograma: <strong> $c </strong><br/><br/>
    Conteo de incidencias en el criptograma: <br/>";


    foreach (count_chars($c, 1) as $caracter => $incidencia) {
        echo "Hay $incidencia incidencias de \"" , chr($caracter) , "\" en el mensaje. <br/>";
     }
     echo "<hr/>
     Realizado: $t <br />
     Usted seleccionó la opción: $o.
     </div>";


}

function establecerMensaje($o, $i){
    if ($o == "codificar") {
        $msj = $i;
    } elseif ($o == "decodificar"){
        $msj = decodificar($i);
    }

    return $msj;

}

function decodificar($cripto){ // TOKENIZAR
    //Se tokeniza con: explode("-", $cripto);
    // el orden de ejecucion es secuencial, por tanto se procesan los de dos digitos primero. De lo contrario hay errores.
    $cripto = str_replace("10-","j", $cripto);
    $cripto = str_replace("11-","k", $cripto);
    $cripto = str_replace("12-","l", $cripto);
    $cripto = str_replace("13-","m", $cripto);
    $cripto = str_replace("14-","n", $cripto);
    $cripto = str_replace("15-","o", $cripto);
    $cripto = str_replace("16-","p", $cripto);
    $cripto = str_replace("17-","q", $cripto);
    $cripto = str_replace("18-","r", $cripto);
    $cripto = str_replace("19-","s", $cripto);
    $cripto = str_replace("20-","t", $cripto);
    $cripto = str_replace("21-","u", $cripto);
    $cripto = str_replace("22-","v", $cripto);
    $cripto = str_replace("23", "w", $cripto);
    $cripto = str_replace("24-","x", $cripto);
    $cripto = str_replace("25-","y", $cripto);
    $cripto = str_replace("26-","z", $cripto);
    $cripto = str_replace("1-", "a", $cripto);
    $cripto = str_replace("2-", "b", $cripto);
    $cripto = str_replace("3-", "c", $cripto);
    $cripto = str_replace("4-", "d", $cripto);
    $cripto = str_replace("5-", "e", $cripto);
    $cripto = str_replace("6-", "f", $cripto);
    $cripto = str_replace("7-", "g", $cripto);
    $cripto = str_replace("8-", "h", $cripto);
    $cripto = str_replace("9-", "i", $cripto);
    
    return $cripto;
}


function principal(){
    if (isset($_POST['input']) & isset($_POST['opcion'])){ // El programa se correo SOLO SI se ingreso texto Y se marco una opcion. Es decir, si no se envio el formulario, no se corre este programa.
      $input = $_POST['input']; //el array $_POST[] tiene todos los elementos recibidos por metodo POST. Se corresponde la clave en el array con el nombre de la variable en el formulario.
      $input = validarInput($input);
      $mensaje = "";
      $criptograma = "";
      $opcion = $_POST['opcion'];
      $tiempo = date("d/m/Y, H:i", time());
      $mensaje = establecerMensaje($opcion, $input);
      $criptograma = encriptar($mensaje);
      imprimir($mensaje, $criptograma, $tiempo, $opcion);
    }
}
?>