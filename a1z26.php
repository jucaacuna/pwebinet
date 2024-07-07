<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css"> 
</head>
<body>
    <header>
        <h1>A1Z26 </h1>
    </header>
    <?php require 'miMenu.php'; ?>
    <main>
		<article>
			<h2>El algoritmo</h2>
			<p>EL A1Z26 es un algoritmo de cifrado simetrico. Es decir, utiliza el mismo alfabeto para el mensaje que para el criptograma. El alfabeto del mensaje consiste en todas las letras desde la A a la Z. Y el alfabeto del criptograma son todos los numeros del 1 al 26. El algoritmo consiste en corresponder las letras con su posicion numerica en el alfabeto. Asi, la letra A se corresponde con el 1 y la Z con el 26.</p>
			<p>No hay clave. En este algoritmo no existe clave de cifrado.</p>
            <p>Debilidades del algoritmo: es fragil al analisis de incidencias. Es decir, sabiendo la frecuencia con la que aparecen las letras en el idioma espanol, se puede analizar el criptograma para buscar la mismas frecuencias. Para dejar esto en evidencia, se incluyo un conteo de las incidencias de las letras en el mensaje  de los numeros en el criptograma. Como se podra observar, la relacion es clara. En conclusion, el algoritmo es muy debil ante este ataque.</p>
		</article>
        <main>
		<article>
			<h2>La implementacion</h2>
            <p>Este mismo algoritmo fue realizdo en <a href=""> Java </a>, pero con un enfoque orientado a objetos. En este caso, aunque PHP permite trabajar con objetos, se hizo un abordaje desde el paradigma estructurado. </p>
			<p>Se usaron strings (cadenas), segun las definiciones de la <a href="https://www.php.net/manual/es/language.types.string.php"> documentacion oficial de PHP</a>.</p>
            <p>Se uso la funcion <a href="https://www.php.net/manual/en/function.str-replace.php">str_replace</a> </p>
            
		</article>
        <article>
        <form method="post" action="procesar.php">
        Ingrese el texto a codificar:
        <input type="text" name="input" maxlength="200" size="100" autocomplete="off" placeholder='AQUI VA EL MENSAJE A ENCRIPTAR'>
        Codificar<input type="radio" name="opcion" value="encriptar" checked = "checked">
        Decodificar<input type="radio" name="opcion" value="decodificar">
        <input type="submit" value="enviar">
        </form>
        </article>
        
    
</body>
</html>