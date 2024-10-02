<?php
    function obtenerPagos($nombre) {
        $archivo = fopen("../../Ejercicio-2/txt/pagos.txt", 'r');
        $pagos = []; // Arreglo para almacenar los pagos

        while (!feof($archivo)) {
            $linea = fgets($archivo);
            $separar = explode(";", $linea);

            if ($nombre == $separar[0]) {
                // Añadimos el pago al arreglo de pagos
                $pagos[$separar[3]] = $separar[4]; // Día => Honorario
            }
        }
        fclose($archivo);

        return $pagos; // Devolvemos el arreglo asociativo con los pagos
    }
?>
