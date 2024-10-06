<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="REGISTRAR CLIENTE NUEVO"?></title>
</head>

<body>
    <?php require 'miMenu.php'; ?>
    <main>
	    <article>
            <form method="post" action="registrarCliente.php">
            Ingrese su nombre: 
            <input type="text" name="nombre" maxlength="200" size="100" autocomplete="off" placeholder='Juan'>
            Apellido:
            <input type="text" name="apellido" maxlength="200" size="100" autocomplete="off" placeholder='Gonzalez'>
            <!--El html limita el tamanio a 9 digitos, lo que se necesita para un celular en Uruguay -->
            Celular
            <input type="text" name="telefono" maxlength="9" size="" autocomplete="off" placeholder='091 000 000'>
            <!--Seleccion de la cancha -->
            Su contraseña:
            <input type="text" name="password" maxlength="10" size="" autocomplete="off" placeholder='password'>
            <input type="submit" value="Registrar">
            </form>

            <?php require_once 'procesarRegistroCliente.php';?>

        </article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>