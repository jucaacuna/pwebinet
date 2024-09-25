<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="DISPONIBILIDAD"?></title>
</head>

<body>
    <?php require 'miMenu.php'; ?>
    <main>
	    <article>

            <form method="post" action="reservar.php">
            Ingrese su nombre: 
            <input type="text" name="nombre" maxlength="200" size="100" autocomplete="off" placeholder='Juan'>
            <input type="text" name="apellido" maxlength="200" size="100" autocomplete="off" placeholder='Gonzalez'>
            <input type="text" name="telefono" maxlength="9" size="" autocomplete="off" placeholder='091 000 000'>
            <!--Seleccion de la cancha -->
            <!-- Una lista de 10 canchas en lista fija o... llamar la lista desde la base de datos. -->
            <!--Seleccion de los dias -->
            Lunes<input type="radio" name="dia" value="lunes" checked = "checked">
            Viernes<input type="radio" name="dia" value="viernes">
            <!--Seleccion de las horas -->
            <input type="submit" value="Reservar">
            </form>

            <?php require_once 'procesarReserva.php';?>
<?php
// un formulario
// el formulario desplegaría una lista de opciones de dias y horarios disponibles.
// restricción, si ese día-fecha ya tiene reserva, que no se cargue previamente en ese lista, para que no 
// lo vea el formulario.
// y guardar lo del formulario en la base de datos.
?>
        </article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>