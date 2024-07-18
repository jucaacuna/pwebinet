<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="A1Z26"?></title>
</head>
<body>
    <?php require_once 'miMenu.php'; ?>
    <main>
    <?php echo "<h1>$titulo</h1>" ?>
		<article>
			<h2>El algoritmo</h2>
			<p>El <strong>A1Z26</strong> es un algoritmo de cifrado por sustitución. A cada elemento del alfabeto del mensaje se lo substituye por uno del alfabeto del criptograma. Hay una correspondencia entre ambos. La existencia de dos alfabetos distintos nos lleva a pensar que es polialfabético, sinembargo siempre se utiliza el el mismo alfabeto para cifrar. Por tanto decimos que es monoalfabético. </p>
            <p>El alfabeto(mensaje) es: A, B, C, D, E, F, G, H, I, J, K, L, M, N, O, P, Q, R, S, T, U, V, W, X, Y, Z y el alfabeto(criptograma) es: 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26.</p>
			<p>No hay clave. En este algoritmo no existe clave de cifrado.</p>
            <p>Debilidades del algoritmo: es fragil al analisis de incidencias. Es decir, sabiendo la frecuencia con la que aparecen las letras en el idioma espanol, se puede analizar el criptograma para buscar la mismas frecuencias. Para dejar esto en evidencia, se incluyo un conteo de las incidencias de las letras en el mensaje  de los numeros en el criptograma. Como se podra observar, la relacion es clara. En conclusion, el algoritmo es muy debil ante este ataque.</p>
		</article>
        
		<article>
			<h2>La implementación</h2>
            <p>En este caso, aunque PHP permite trabajar con objetos, se hizo un abordaje desde el paradigma estructurado. </p>
			<p>Se usaron strings (cadenas), segun las definiciones de la <a href="https://www.php.net/manual/es/language.types.string.php"> documentacion oficial de PHP</a> para guardar tanto el mensaje como el criptograma.</p>
            <p>La aplicación se basa en el uso la función <a href="https://www.php.net/manual/en/function.str-replace.php">str_replace</a> para la sustitución entre las porciones (substrings) segun su correspondencia, indicada mas arriba.</p>
            <p>La secuencia de la lógica del back end (PHP) es: tomar el texto recibido por método POST, limpiar el string, remplazar cada elemento por su correspondiente, devolver un texto con el resultado.  </p>
            
		</article>
        <article>
        <form method="post" action="a1z26.php">
        Ingrese el texto a codificar:
        <input type="text" name="input" maxlength="200" size="100" autocomplete="off" placeholder='AQUI VA EL MENSAJE A ENCRIPTAR'>
        Codificar<input type="radio" name="opcion" value="codificar" checked = "checked">
        Decodificar<input type="radio" name="opcion" value="decodificar">
        <input type="submit" value="enviar">
        </form>
        
        <?php require_once 'procesarA1z26.php';?>
        
        </article>
    </main>
    <?php require_once 'miFooter.php'; ?>
</body>
</html>