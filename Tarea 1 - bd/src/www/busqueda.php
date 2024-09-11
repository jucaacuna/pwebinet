<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="BUSQUEDA"?></title>
</head>

<body>
    <?php require 'miMenu.php'; ?>
    <main>
    <h2>Busquda de estudiantes</h2>
        <form action="busqueda.php" method="post">
            <!-- Campo de Nombre -->
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" required><br><br>

            <!-- Botón de Enviar -->
            <input type="submit" value="Buscar">
        </form>
        <?php require_once 'procesarBusqueda.php';?>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>