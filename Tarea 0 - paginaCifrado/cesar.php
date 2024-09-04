<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="CESAR"?></title>
</head>

<?php require_once 'miMenu.php'; ?> 
<main>
    <?php echo "<h1>$titulo</h1>" ?>
	<article>
		<h2>El algoritmo</h2>
		<p>El algoritmo de Cesar.</p>
	</article>
    
	<article>
		<h2>La implementacion</h2>
        <p> </p>
        
	</article>
    <article>
         <form method="post" action="cesar.php">
         Ingrese el texto a codificar:
         <input type="text" name="input" maxlength="200" size="100" autocomplete="off" placeholder='AQUI VA EL MENSAJE A ENCRIPTAR'>
         Codificar<input type="radio" name="opcion" value="codificar" checked = "checked">
         Decodificar<input type="radio" name="opcion" value="decodificar">
         <input type="submit" value="enviar">
         </form>
            
         <?php require_once 'procesarCesar.php';?>
            
    </article>
    </main>
<?php require_once 'miFooter.php'; ?>
<body>
    
</body>
</html>