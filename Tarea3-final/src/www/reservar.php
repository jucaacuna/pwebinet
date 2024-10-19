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
            <?php require 'listar.php' ?>
            <h1> RESERVA DE CANCHAS </h1>
            <form method="post" action="reservar.php"> <!--El formulario envia los datos a este mismo archivo. -->
<!-- Esconder esto luego de enviar-->
            Ingrese su id como cliente de la empresa: 
                <input type="text" name="idCliente" maxlength="9" size="" autocomplete="off" placeholder='00'>
                Ingrese su contraseña:
                <input type="password" name="password" maxlength="10" size="" autocomplete="off" placeholder='password'>
                <!--Seleccion de la cancha -->
                <?php listar_canchas();  ?>
                <!--Seleccion de los dias.-->
                <label for="dia">Dia</label>
                <!-- El dia mas temprano a elegir, es hoy (en fecha del server). No se puede elegir en el pasado -->
                <input type="date" min="<?php echo date("Y-m-d"); ?>" name="dia">
<!-- HASTA ACA -->
                <!--Boton-->
                <input type="submit" value="Continuar"/>
                <input type="reset" value="Borrar"/>

                <?php if (isset($_POST['idCliente']) & isset($_POST['password']) & isset($_POST['dia']) ){
                    listar_horas_disponibles_de_una_cancha($_POST['cancha'],$_POST['dia']);
                }
                ?>
            
            </form>

            <?php require_once 'procesarReserva.php'; //Aca se van a procesar los datos del formulario ?>
        </article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>