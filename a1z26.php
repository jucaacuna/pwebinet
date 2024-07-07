<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/estilo.css"> 
</head>
<body>
    <header>
        <h1>A1Z26 </h1>
    </header>
    <?php require 'miMenu.php'; ?>
    <ol>
    <li>un poco de info sobre el algoritmo</li>
    <li>el formulario vinculado a procesar.php</li>
    </ol>
    <form method="post" action="procesar.php">
        Ingrese el texto a codificar:
        <input type="text" name="mensaje" maxlength="200" size="100" autocomplete="off" placeholder='AQUI VA EL MENSAJE A ENCRIPTAR'>
        <input type="submit" value="codificar">
    </form>
    
</body>
</html>