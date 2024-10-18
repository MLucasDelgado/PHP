<?php
    /*2-d) Desarrollar el procedimiento mencionado mencionado, 
    cuya tarea será recibir y  guardar todos los datos, incluido el costo, 
    en un archivo de texto de nombre turnos.csv. 
    Luego de guardar, mostrar el mensaje "Guardado exitoso", 
    esperar 3 segundos y redireccionar a la página index.php. */
    function reservarTurno ($apellido, $nombre, $dni, $correo, $celular, $vacuna, $fecha, $hora, $costoVacuna) {
        $carpeta = '../turnos';

        if(!file_exists($carpeta)){
            mkdir($carpeta);
        }

        $nombreArchivo = '/turnos.csv';

        $ubicacion = $carpeta.$nombreArchivo;

        $archivo = fopen($ubicacion, 'a');

        $linea = "$apellido,$nombre,$dni,$correo,$celular,$vacuna,$fecha,$hora,$costoVacuna";
        fputs($archivo, $linea .PHP_EOL);

        fclose($archivo);

        echo '<p class="text-center">Guardado exitoso.';

        header("refresh:3; url=../index.php");

    }
?>