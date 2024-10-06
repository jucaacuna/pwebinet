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
            <h1> RESERVA DE CANCHAS </h1> <!-- Solo pueden reservar clientes registrados en el sistema. -->
            <form method="post" action="reservar.php">
            Ingrese su id como cliente de la empresa: 
            <input type="text" name="idCliente" maxlength="9" size="" autocomplete="off" placeholder='00'>
            Ingrese su contraseña:
            <input type="text" name="password" maxlength="10" size="" autocomplete="off" placeholder='password'>
            <!--Seleccion de la cancha -->
            <!-- Una lista de 10 canchas en lista fija o... llamar la lista desde la base de datos. -->
            <!--Seleccion de los dias. # Estos dias deberian cargarse de los disponibles-->
            <?php
            $dias=["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
            print "\n".'<label for="dia">Dia</label>';
            print "\n".'<select name="dia" id="dia">';
            foreach($dias as $dia){
                print "\n".'<option value="'.$dia.'">'.$dia.'</option>'; //mejorar concatenacion #############
            }
            print"\n</select>";
            ?>

            <!--Seleccion de las horas. # Luego filtrar por dia y restar ya reservadas. -->
            <?php
            $horas_inicio=["16:00","17:00","18:00","19:00","20:00","21:00","22:00"];
            print "\n".'<label for="hora_inicio">Hora de inicio</label>';
            print "\n".'<select name="hora_inicio" id="hora_inicio">';
            foreach($horas_inicio as $hora){
                print "\n".'<option value="'.$hora.'">'.$hora.'</option>'; //mejorar concatenacion #############
            }
            print"\n</select>";
            ?>
            <?php
            $horas_finalizacion=["17:00","18:00","19:00","20:00","21:00","22:00","23:00"];
            print "\n".'<label for="hora_finalizacion">Hora de finalizacion</label>';
            print "\n".'<select name="hora_finalizacion" id="hora_finalizacion">';
            foreach($horas_finalizacion as $hora){
                print "\n".'<option value="'.$hora.'">'.$hora.'</option>'; //mejorar concatenacion #############
            }
            print"\n</select>";
            ?>

            <input type="submit" value="Reservar">
            </form>

            <?php require_once 'procesarReserva.php';?>

        </article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>