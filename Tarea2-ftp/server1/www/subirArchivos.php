<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="ftp"?></title>
</head>

<body>
    <?php require 'miMenu.php'; ?>
    <main>
		<article>

      <form method="post" enctype="multipart/form-data" action="subirArchivos.php">
      Selecciona un archivo:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Subir archivo" name="submit">
      </form>

  <!-- SI APRETO EL BOTON, SE EJECUTA LA FUNCIONES subirArchivo() importada del archivo funcionesFTP.php -->
  <?php require_once 'funcionesFTP.php';
    subirArchivo($ftp_server, $ftp_username, $ftp_password);
  ?>
 
		</article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>