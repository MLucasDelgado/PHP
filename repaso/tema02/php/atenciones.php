<?php
    $ruta = '../';
    require_once('../html/header.html');
    require_once 'datos.php';

    /*
        2a. Simular 500 atenciones de vehículos, seleccionando al azar un tipo de
            transporte, del array $transportes, que se encuentra en el archivo datos.php,
            que ya está requerido.
        b. Mostrar el total de atenciones de cada tipo de transporte.

        c. Determinar cuál tipo de transporte tuvo mayor cantidad de atenciones y
            mostrarlo en un párrafo.
    */

    $contadorAuto = 0;
    $contadorMoto = 0;
    $contadorCamion = 0;
    $contadorCamioneta = 0;

    for ($i = 1; $i <= 500; $i++) {
        $transporteRandom = array_rand($transportes); // me da la posicion random del array.
        switch ($transporteRandom) {
            case 0:
                $contadorAuto++;
            break;

            case 1:
                $contadorMoto++;
            break;

            case 2:
                $contadorCamion++;
            break;

            case 3:
                $contadorCamioneta++;
            break;
        }
    }

    $transportesCantidad = [
        'Auto' => $contadorAuto,
        'Moto' => $contadorMoto,
        'Camion' => $contadorCamion,
        'Camioneta' => $contadorCamioneta,
    ];

    

    $mayorAtenciones = max($transportesCantidad);
    $tipoTransporteAtenciones = array_search($mayorAtenciones, $transportesCantidad);

    /*
        otra forma de encontrar las mayor atenciones y el tipo de transporte para estas atenciones:
            
        // Inicializar variables para almacenar el mayor número y el tipo de transporte
            $mayorAtenciones = null;
            $tipoMayorAtencion = '';

        // Recorrer el array para encontrar el tipo con más atenciones
            foreach ($transportesCantidad as $tipo => $cantidad) {
                if ($mayorAtenciones === null || $cantidad > $mayorAtenciones) {
                    $mayorAtenciones = $cantidad;
                    $tipoMayorAtencion = $tipo;
                }
            } 
    */

    echo '<h3>Cantidad de vehiculos</h3>';

    echo '<ul>';
    foreach($transportesCantidad as $tipo => $cantidad) {
        echo "<li>$tipo: $cantidad</li>";
    }
    echo '</ul>';

    echo "<p>El transporte con mayor atenciones fue: <strong> $tipoTransporteAtenciones</strong>, y su cantidad de atenciones fue de: $mayorAtenciones</p>";
    
    /*
        ---------------OTRA FORMA DE HACERLO---------------

        echo "<p>Total de atenciones:</p>";
        echo "<ul>";
        echo "<li>Autos: $cantidadAutos</li>";
        echo "<li>Motos: $cantidadMoto</li>";
        echo "<li>Camiones: $cantidadCamion</li>";
        echo "<li>Camionetas: $cantidadCamioneta</li>";
        echo "</ul>";
        
        // Encontrar el tipo de transporte con más atenciones
        $mayorAtenciones = $cantidadAutos;
        $tipoMayorAtencion = 'Autos';

        if ($cantidadMoto > $mayorAtenciones) {
            $mayorAtenciones = $cantidadMoto;
            $tipoMayorAtencion = 'Motos';
        }
        if ($cantidadCamion > $mayorAtenciones) {
            $mayorAtenciones = $cantidadCamion;
            $tipoMayorAtencion = 'Camiones';
        }
        if ($cantidadCamioneta > $mayorAtenciones) {
            $mayorAtenciones = $cantidadCamioneta;
            $tipoMayorAtencion = 'Camionetas';
        }
    */

    require_once('../html/footer.html');
?>
