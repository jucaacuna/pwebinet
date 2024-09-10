<?php
echo '<!DOCTYPE html>
<html lang="es">';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$instanciaConexion = mysqli_connect("serverBD", "root", "jaja", "escuela");

$consultaBD = "SELECT * FROM estudiantes";

$resultadoConsulta = mysqli_query($instanciaConexion, $consultaBD);
echo '
<table>
  <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Edad</th>
    <th>Curso</th>
    <th>Email</th>
  </tr>';
foreach ($resultadoConsulta as $fila) {
    print "\n   <tr>\n";
    print "   <td> $fila[id]</td>\n";
    print "   <td> $fila[nombre]</td>\n";
    print "   <td> $fila[edad]</td>\n";
    print "   <td> $fila[curso]</td>\n";
    print "   <td> $fila[email]</td>\n";
    print "   </tr>";
}
echo '</table>
</html>';
?>