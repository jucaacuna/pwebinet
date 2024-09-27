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
            <h1> PODRIA SER QUE SOLO RESERVEN CLIENTE REGISTRADOS, AUTORIZADOS, YA CHEQUEADOS POR LA ADMINISTRACION. SE LES DA UN PASSWORD Y CON ESO RESERVAN.
            </h1>
            <form method="post" action="reservar.php">
            Ingrese su nombre: 
            <input type="text" name="idCliente" maxlength="9" size="" autocomplete="off" placeholder='00'>
            <!--Seleccion de la cancha -->
            <!-- Una lista de 10 canchas en lista fija o... llamar la lista desde la base de datos. -->
            <!--Seleccion de los dias. # Estos dias deberian cargarse de los disponibles-->
            <select name="dia" id="dia">
                <option value="Domingo">Domingo</option>
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miercoles">Miercoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sabado">Sabado</option>
            </select>
            <!--Seleccion de las horas. # Luego filtrar por dia y restar ya reservadas. -->
            <label for="hora_inicio">Hora de inicio</label>
            <select name="hora_inicio" id="hora_inicio">
                <option value="16">16:00</option>
                <option value="17">17:00</option>
                <option value="18">18:00</option>
                <option value="19">19:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
            </select>
            <label for="hora_fin">Hora de inicio</label>
            <select name="hora_fin" id="hora_fin">
                <option value="17">17:00</option>
                <option value="18">18:00</option>
                <option value="19">19:00</option>
                <option value="20">20:00</option>
                <option value="21">21:00</option>
                <option value="22">22:00</option>
                <option value="23">23:00</option>
            </select>

            <input type="submit" value="Reservar">
            </form>

            <?php require_once 'procesarReserva.php';?>

        </article>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>