<?php
    $ruta = '../';
    require_once 'encabezado.php';

    /*2-a) Controle los datos que provienen del formulario que se encuentra en 
    el archivo index.php. */

    /*2-b) Si tiene todos los datos, deberá buscar el costo de la vacuna elegida 
    en el arreglo $costos (que está en el archivo datos.php). 
    No copiar el arreglo, usarlo desde donde está. */

    /* 2-c) Luego llame al procedimiento reservarTurno, que se encontrará 
    en el archivo funciones.php. Pasele todos los datos necesarios*/

    require_once('datos.php');
    require_once('funciones.php');
    if (!empty($_POST['apellido']) && !empty($_POST['nombre']) && !empty($_POST['dni']) && !empty($_POST['correo']) && !empty($_POST['celular']) && !empty($_POST['vacuna']) && !empty($_POST['fecha']) && !empty($_POST['hora'])) {
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $dni = $_POST['dni'];
        $correo = $_POST['correo'];
        $celular = $_POST['celular'];
        $vacuna = $_POST['vacuna'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        
        if (array_key_exists($vacuna, $costos)) {
            $costoVacuna = $costos[$vacuna];
            reservarTurno($apellido, $nombre, $dni, $correo, $celular, $vacuna, $fecha, $hora, $costoVacuna);
        } else {
            echo "<p class='text-center'>Vacuna no encontrada.</p>";
        }
    } else {
        echo '<p class="text-center">Por favor llene todos los campos del formulario.</p>';
    }

    require_once 'pie.php';
?>