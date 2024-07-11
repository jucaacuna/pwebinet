<?php
// ############################################### VARIABLES #######################################

$input = $_POST['input']; //el array $_POST[] tiene todos los elementos recibidos por metodo POST. Se corresponde la clave en el array con el nombre de la variable en el formulario.
$input = sanitizarInput($input);
$mensaje = "";
$criptograma = "";
$opcion = $_POST['opcion'];
$tiempo = date("d/m/Y, H:i", time());

// ############################################### SECUENCIA DE CONTROL DEL PROGRAMA ###############


$mensaje = establecerMensaje($opcion, $input);
$criptograma = encriptar($mensaje);
imprimir($mensaje, $criptograma, $tiempo, $opcion);


// ############################################### FUNCIONES #######################################

//Esta funcion es pensando en la seguridad... para que no me joda el usuario.
//Fundamentar con datos.
function sanitizarInput($var){

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
    $msj = str_replace(array('o','O'), "16-", $msj);
    $msj = str_replace(array('p','P'), "17-", $msj);
    $msj = str_replace(array('q','Q'), "18-", $msj);
    $msj = str_replace(array('r','R'), "19-", $msj);
    $msj = str_replace(array('s','S'), "20-", $msj);
    $msj = str_replace(array('t','T'), "21-", $msj);
    $msj = str_replace(array('u','U'), "22-", $msj);
    $msj = str_replace(array('v','V'), "23-", $msj);
    $msj = str_replace(array('w','W'), "24", $msj);
    $msj = str_replace(array('x','X'), "25-", $msj);
    $msj = str_replace(array('y','Y'), "15-", $msj);
    $msj = str_replace(array('z','Z'), "26-", $msj);
    return $msj;
}

function imprimir($m, $c, $t, $o) {
    echo "<h2>MODULO DE CIFRADO</h2> 
Su mensaje: $m <br/>
Conteo de incidencias: <br/>";


foreach (count_chars($m, 1) as $caracter => $incidencia) {
    echo "Hay $incidencia incidencias de \"" , chr($caracter) , "\" en el mensaje. <br/>";
 }
 echo "<hr/>";

echo "Se traduce como: $c <br />
Conteo de incidencias: <br/>";


foreach (count_chars($c, 1) as $caracter => $incidencia) {
    echo "Hay $incidencia incidencias de \"" , chr($caracter) , "\" en el mensaje. <br/>";
 }
 echo "<hr/>
 Realizado: $t <br />
 Usted selecciono la opcion: $o";


}

function establecerMensaje($o, $i){
    if ($o == "encriptar") {
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
    $cripto = str_replace("16-","o", $cripto);
    $cripto = str_replace("17-","p", $cripto);
    $cripto = str_replace("18-","q", $cripto);
    $cripto = str_replace("19-","r", $cripto);
    $cripto = str_replace("20-","s", $cripto);
    $cripto = str_replace("21-","t", $cripto);
    $cripto = str_replace("22-","u", $cripto);
    $cripto = str_replace("23-","v", $cripto);
    $cripto = str_replace("24", "w", $cripto);
    $cripto = str_replace("25-","x", $cripto);
    $cripto = str_replace("15-","y", $cripto);
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



?>