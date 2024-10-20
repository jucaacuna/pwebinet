<?php
/* Este modulo es solo para listar las canchas registradas en el sistema. */


function listar_canchas(){
    
    /*      Importar la conexión       */

    require 'conexionBD.php';

    /* Traemos los datos de la tabla Canchas */
    $sql = "SELECT * FROM Canchas";
    $resultadoConsulta = $instanciaConexion->query($sql);



    print "\n                ".'<label for="cancha">Canchas</label>';
    print "\n                ".'<select name="cancha" id="cancha">';
    foreach($resultadoConsulta as $cancha){
        print "\n                ".'<option value="'.$cancha['idCancha'].'">'.$cancha['idCancha']." - ".$cancha['nombre'].'</option>';
    }
    print"\n                </select>";
    $instanciaConexion->close();
    }

    /* Esta funcion devuelve las horas disponilbes de una cancha, dado un dia. */
    function listar_horas_disponibles_de_una_cancha($idCancha, $dia){
    
        /*      Importar la conexión       */
    
        require 'conexionBD.php';
        /* Capturo caso fallido de conexion*/
        if ($instanciaConexion->connect_error) {
            die("<b>Conexión fallida:</b> " . $instanciaConexion->connect_error); 
        
        } else {
            /* Traemos los datos de la tabla Reservas */
            $sql = "SELECT * FROM Reservas WHERE idCancha = ? AND fecha_reserva = ?";
            $stmt = $instanciaConexion->prepare($sql);
            // Vincular los parámetros a la consulta
            $stmt->bind_param("is", $idCancha, $dia); // 'i' para integer, 's' para string
            // Ejecutar la consulta
            $stmt->execute();
            // Obtener los resultados
            $resultadoConsulta = $stmt->get_result();
            $reservas = $resultadoConsulta->fetch_all(MYSQLI_ASSOC);

            /* Construimos la lista de horarios disponibles  */;
            $horarios_disponibles = ["16:00-17:00","17:00-18:00","18:00-19:00","19:00-20:00","20:00-21:00","21:00-22:00","22:00-23:00"];

            /* Si esta presenta en el array de la consulta de reservas,
            se elimina de los disponibles a ofrecer. */
            foreach($reservas as $r){
                $posicion = array_search($r['horario'], $horarios_disponibles);
                if($posicion !== false ){
                    unset($horarios_disponibles[$posicion]);
                }
            }

            /* Construyo html con la lista de horas disponibles habiendo filtrado */
            print "\n                ".'<label for="horario">Horario: </label>';
            print "\n                ".'<select name="horario" id="horario">';
            foreach($horarios_disponibles as $h){
                print "\n                ".'<option value="'.$h.'">'.$h.'</option>';
            }
            print"\n                </select>";

        }
        
    
        






        $instanciaConexion->close();
    }
    ?>