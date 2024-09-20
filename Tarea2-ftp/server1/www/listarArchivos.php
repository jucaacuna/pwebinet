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

    <?php require 'funcionesFTP.php'; 

    listarArchivos($ftp_server, $ftp_username, $ftp_password);
    
    ?>  
		</article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>