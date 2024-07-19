<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="INICIO"?></title>
</head>

<body>
    <?php require 'miMenu.php'; ?>
    <main>
		<article>
			<h2>El proyecto</h2>
			<p>Este sitio surge como ejercicio académico a implementacion en php de métodos de criptografia clásica, como primera aproximación a la seguridad informática.</p>
			<p>El sitio está programado "a mano" sin ningún framework, haciendo uso únicamente de PHP, HTML y CSS.</p>
            <p>El código de todo el sitio se puede encontrar en: <a href="https://github.com/jucaacuna/pwebinet" target="_blank" >Github</a>.</p>
		</article>
        <article>
			<h2>Criptografía</h2>
			<p>La criptografía es la práctica de codificar información de manera que no se pueda decodificar sin acceder al método o a la clave requerida.</p>
			<p>La criptografía consta de dos operaciones principales:
                <ol>
            <li> el cifrado, que transforma la información de texto sin formato en texto cifrado mediante una clave de cifrado.</li>
            <li> descifrado, que transforma el texto cifrado en texto sin formato mediante una clave de descifrado.</li></p>
                </ol>
		</article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>