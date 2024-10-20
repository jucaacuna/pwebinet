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
            <h1> RESERVA DE CANCHAS </h1>
            <form id="reservaForm" method="post" action="reservar.php"> <!--El formulario envia los datos a este mismo archivo. -->

                <?php
                    require 'listar.php';
                     listar_canchas();
                ?>
                <!--Seleccion de los dias.-->
                <label for="dia">Dia</label>
                <!-- El dia mas temprano a elegir, es hoy (en fecha del server). No se puede elegir en el pasado -->
                <input type="date" min="<?php echo date("Y-m-d"); ?>" name="dia" id="dia" >

                <div id="disponibilidad">
                    <!--Aca se listaran las horas luego de indicada la cancha y la fecha-->
                </div>

            </form>
            <?php require_once 'procesarReserva.php'; //Aca se van a procesar los datos del formulario ?>
             <!--Boton para cargar nuevos datos-->
            <button type="button" id="verDisponibilidad">Ver Disponibilidad</button>
        </article>
        
    </main>


    <?php require_once 'miFooter.php'; ?>
    <script src="reserva.js"></script> <!-- Cargar el archivo JavaScript -->

</body>

</html>