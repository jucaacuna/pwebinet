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
    /*      Crear la conexión       */

/* En ejercicios anteriores la conexion se hizo con un enfoque estructurado. Usando mysqli_connect().
 En este, usamos uno enfocado a POO, creando una insancia de la clase mysqli. */

$instanciaConexion = new mysqli("serverBD", "root", "jaja", "futbol5");

    


/* Verificar la conexión   */

if ($instanciaConexion->connect_error) {
    die("Conexión fallida: " . $instanciaConexion->connect_error); 

}


/* Traemos los datos de la tabla */
$sql = "SELECT * FROM Canchas";
$resultadoConsulta = $instanciaConexion->query($sql);
echo '
<table>
<caption> LAS MEJORES CANCHAS </caption>
  <thead>
    <tr>
      <th scope = "col">ID</th>
      <th scope = "col">Nombre</th>
      <th scope = "col">Descripcion</th>
    </tr> 
  </thead>
  <tbody>';
foreach ($resultadoConsulta as $c) {
    

    print "\n<tr>\n";
    print "   <td> $c[idCancha]</td>\n";
    print "   <td> $c[nombre]</td>\n";
    print "   <td> $c[descripcion]</td>\n";
    print "</tr>\n";
}
echo '</tbody> 
</table>'; 
$instanciaConexion->close();
?>

    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>