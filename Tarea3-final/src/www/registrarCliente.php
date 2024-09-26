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
            <input type="text" name="apellido" maxlength="200" size="100" autocomplete="off" placeholder='Gonzalez'>
            <input type="text" name="telefono" maxlength="9" size="" autocomplete="off" placeholder='091 000 000'>
            <!--Seleccion de la cancha -->
            <!-- Una lista de 10 canchas en lista fija o... llamar la lista desde la base de datos. -->
            <!--Seleccion de las horas -->
            <input type="submit" value="Reservar">
            </form>

            <?php require_once 'procesarRegistroCliente.php';?>
<?php

?>
        </article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>