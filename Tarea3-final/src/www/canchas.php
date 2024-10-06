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
<?php    

/*      Importar la conexión       */

require_once 'conexionBD.php';

/* Verificar la conexión   */

if ($instanciaConexion->connect_error) {
    die("Conexión fallida: " . $instanciaConexion->connect_error); 

}

/* Traemos los datos de las Canchas */
$sql = "SELECT * FROM Canchas";
$resultadoConsulta = $instanciaConexion->query($sql);

/* Imprimimos los datos de cada cancha con la siguiente estructura */
foreach ($resultadoConsulta as $c) {
    

  print "<article>\n";
  print "   <h2> $c[nombre]</h2>\n";
  print '   <img src= "'. "$c[imagen]" . '" class="cancha-img"/>'."<!-- Imagen de la cancha -->\n";
  print '   <img src= "'. "$c[descripcionImagen]" . '" class="portada-img"/> '."<!-- Imagen de descripción --> \n"; 
  // Agregar: un link a un pop up que muestre reservas de estas canchas.
  print "\n</article>\n";
}

$instanciaConexion->close();
?>

    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>