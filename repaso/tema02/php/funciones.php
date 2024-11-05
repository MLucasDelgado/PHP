<?php
    function fnCobro ($tipo, $litros) 
    {
       $costos = [
                    'Super' => 240.5,
                    'Premium' => 308.7,
                    'Gasoil' => 258.4,
                    'Euro' => 352.7 
                ]; 

        /* 1-c) c.	En el archivo funciones.php, desarrollar la función mencionada,  
        cuya tarea será trabajar con el arreglo $costos, para calcular y retornar 
        el importe del combustible cargado.*/

        $totalAPagar = 0;

        switch($tipo) {
            case 'Super':
                $totalAPagar = $costos[$tipo] * $litros;
            break;

            case 'Premium':
                $totalAPagar = $costos[$tipo] * $litros;
            break;

            case 'Gasoil':
                $totalAPagar = $costos[$tipo] * $litros;
            break;

            case 'Euro':
                $totalAPagar = $costos[$tipo] * $litros;
            break;
        }

        return $totalAPagar;
    }
    
?>