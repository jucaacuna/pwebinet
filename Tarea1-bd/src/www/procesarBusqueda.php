<?php 


 if (isset($_POST['nombre'])){
    mensaje();
 }

function mensaje(){
    try {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $instanciaConexion = mysqli_connect("serverBD", "root", "jaja", "escuela");

        $consultaBD = "SELECT * FROM estudiantes WHERE nombre = '{$_POST['nombre']}'";

        $resultadoConsulta = mysqli_query($instanciaConexion, $consultaBD);
        echo '
        <table>
        <caption> ESTUDIANTES </caption>
          <thead>
            <tr>
            
              <th scope = "col">ID</th>
              <th scope = "col">Nombre</th>
              <th scope = "col">Edad</th>
              <th scope = "col">Curso</th>
              <th scope = "col">Email</th>
           
            </tr> 
          </thead>
          <tbody>';
        foreach ($resultadoConsulta as $fila) {
            print "\n<tr>\n";
            print "   <td> $fila[id]</td>\n";
            print "   <td> $fila[nombre]</td>\n";
            print "   <td> $fila[edad]</td>\n";
            print "   <td> $fila[curso]</td>\n";
            print "   <td> $fila[email]</td>\n";
            print "</tr>\n";
        }
          echo '</tbody> 
        </table>'; 
      } catch (Exception $e) {
        echo 'Excepción capturada. PASO ALGO CON LA BASE DE DATOS. ',  $e->getMessage(), "\n";
    }
}


?>