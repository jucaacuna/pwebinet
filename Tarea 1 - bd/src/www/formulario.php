<!DOCTYPE html>
<html lang="es">
<html>

<head>
    <?php require 'miHead.php'; ?>
    <title><?php echo $titulo="INICIO"?></title>
</head>

<body>
    <?php require 'miMenu.php'; ?>
    <main>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="procesarFormulario.php" method="post">
        <!-- Campo de Nombre -->
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <!-- Campo de Edad -->
        <label for="edad">Edad:</label><br>
        <input type="number" id="edad" name="edad" required><br><br>

        <!-- Campo de Curso -->
        <label for="curso">Curso:</label><br>
        <input type="text" id="curso" name="curso" required><br><br>

        <!-- Campo de Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Botón de Enviar -->
        <input type="submit" value="Registrar">
    </form>
</body>

        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>