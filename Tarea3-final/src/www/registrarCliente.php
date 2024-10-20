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
            <form id="registroClienteForm" method="post" action="registrarCliente.php">
            Ingrese su nombre: 
            <input type="text" name="nombre" id="nombre" maxlength="200" size="100" autocomplete="off" placeholder='Juan'>
            Apellido:
            <input type="text" name="apellido" id="apellido" maxlength="200" size="100" autocomplete="off" placeholder='Gonzalez'>
            <!--El html limita el tamanio a 9 digitos, lo que se necesita para un celular en Uruguay -->
            Celular
            <input type="text" name="telefono" id="telefono" maxlength="9" size="" autocomplete="off" placeholder='091 000 000'>
            <!--Seleccion de la cancha -->
            Su contraseña:
            <input type="password" name="password" id="password" maxlength="10" size="" autocomplete="off" placeholder='password'>
            <input type="submit" value="Registrar">
            </form>

            <?php require_once 'procesarRegistroCliente.php';?>

        </article>
        <!-- ######################## ACA EL JAVASCRIPT PARA VALIDAR ANTES DE ENVIAR ######################## -->
        <!-- Como aprendizaje luego dedicarle varias horas al script: el atributo "id" de las tag input son importantisimas
         y no son sustituibles por los atributos "name". -->
        <script> 
            document.getElementById('registroClienteForm').addEventListener('submit', function(event) {
                /* Obtenemos los valores de los campos */
                var nombre = document.getElementById('nombre').value.trim();
                var apellido = document.getElementById('apellido').value.trim();
                var telefono = document.getElementById('telefono').value.trim();
                var password = document.getElementById('password').value.trim();

                /* Verificar que todos los campos estén completos. Si uno es vacio ya alcanza para activar la alerta. */
                if (nombre === "" || apellido === "" || telefono === "" || password === "") {
                    alert("Todos los campos son obligatorios.");
                    event.preventDefault(); // Evitar que el formulario se envíe
                    return;
                }

                /* Expresión regular para validar el formato del teléfono (9 dígitos)*/
                /* En Java andamos bien para las expresiones regulares (por Taller 2),
                 pero en Javascript llevó un tiempito agarrarle la mano.*/

                 var telefonoRegex = /^[0-9]{9}$/;

                /* Validar que el teléfono tenga 9 dígitos como yapide el html*/
                if (!telefonoRegex.test(telefono)) {
                    alert("El número de teléfono debe tener 9 dígitos.");
                    event.preventDefault();
                    return;
                }

                /* Validación de la contraseña. Minimo 6 caracteres (numero arbitrario que elegimos) */
                if (password.length < 6) {
                    alert("La contraseña debe tener al menos 6 caracteres.");
                    event.preventDefault();
                    return;
                }
            });
        </script>
        
    </main>

    <?php require_once 'miFooter.php'; ?>
</body>

</html>