<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="CANCHAS"?></title>
</head>
<body>
<?php require 'miMenu.php'; ?>
<main>
  <h1> CANCHAS BIEN PRESENTADAS, CON FOTO. 1 POR ARTICLE</h1>
  <article>
			<h2>Cancha 1</h2> <!-- variable en mysql -->
			<p>Esta cancha, es la mejor de todas.</p> <!-- variable en mysql -->
      <img src="/imagenes/cancha1.jpg" /> <!-- variable en mysql -->

		</article>
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>