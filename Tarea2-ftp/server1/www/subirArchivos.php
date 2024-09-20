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

      <form method="post" enctype="multipart/form-data" action="procesarSubirArchivos.php">
      Selecciona un archivo:
      <input type="file" name="fileToUpload" id="fileToUpload">
      <input type="submit" value="Subir archivo" name="submit">
      </form>
 
		</article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>