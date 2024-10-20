/* Este script gestiona la solicitud de informacion sobre disponibilidad de horas al hacer click en el boton con id 'verDisponibilidad'

En este modulo TUVIMOS UNA DIFICULTAD IMPORTANTE para enganchar html, php y javascript. Tuvimos que indagar en bibliografia extra.*/

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('verDisponibilidad').addEventListener('click', function() {
       
        // Obtener los valores de los campos
        const dia = document.getElementById('dia').value;
        const cancha = document.querySelector('select[name="cancha"]').value;

        // Verificar si los campos están completos
        if (dia && cancha) {
            // Mostrar un indicador de carga
            document.getElementById('disponibilidad').innerHTML = '<h1>Cargando...</h1>';

            // Hacer la solicitud al backend
            // ################################################################################################
            // Este metodo es el mas complejo. Vale un doce.

            fetch('listarScript.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: new URLSearchParams({
                    dia: dia,
                    cancha: cancha
                })
            })
            .then(response => response.text())  // El backend devuelve texto cuando el metodo listar_horas_disponibles_de_una_cancha()
                                               //  del modulo listar.php usa print.
            .then(data => {
                
                // Mostrar la respuesta en el div 'disponibilidad'
                document.getElementById('disponibilidad').innerHTML = data;
                

                // ### Aca creo nuevos campos en el formulario para que aparezcan luego de realizar la consulta.
                
                const form = document.getElementById('reservaForm'); // Identifico el espacio del dom donde cargar lo nuevo

                // Creamos un nuevo campo para el idCliente
                // La idea es construir esta tag:
                // <input type="text" name="idCliente" maxlength="9" size="" autocomplete="off" placeholder='idCliente'>
                const nuevoCampo = document.createElement('input');
                nuevoCampo.type = 'text';
                nuevoCampo.name = 'idCliente';
                nuevoCampo.id = 'idCliente';
                nuevoCampo.placeholder = 'idCliente';
                nuevoCampo.maxLength = '9';
                nuevoCampo.autocomplete = 'off';
                form.appendChild(nuevoCampo); // Agregar el nuevo campo al formulario


                // Creamos un nuevo campo para el idCliente
                // La idea es construir esta tag:
                // <input type="password" name="password" maxlength="10" size="" autocomplete="off" placeholder='password'>
                const nuevoCampo2 = document.createElement('input');
                nuevoCampo2.type = 'password';
                nuevoCampo2.name = 'password';
                nuevoCampo2.id = 'password';
                nuevoCampo2.placeholder = 'password';
                nuevoCampo2.maxLength = '10';
                nuevoCampo2.autocomplete = 'off';
                form.appendChild(nuevoCampo2); // Agregar el nuevocampo2 al formulario

                // Botón de envío dinámicamente
                const nuevoBoton = document.createElement('button');
                nuevoBoton.type = 'submit';
                nuevoBoton.textContent = 'Confirmar Reserva';
                form.appendChild(nuevoBoton); // Agregar el botón al formulario
            })
            .catch(error => {
                console.error('Error:', error);
                document.getElementById('disponibilidad').innerHTML = '<h1>Error al cargar disponibilidad</h1>';
            });
        } else {
            alert('Por favor, completa todos los campos.');
        }
    });
});
