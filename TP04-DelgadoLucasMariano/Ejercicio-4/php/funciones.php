<?php
function calcularIntereses($depositoInicial, $cantidadDias) {
   $interes = 0;
   switch ($cantidadDias) {
        case 30:
        case 45:
        case 60:
        case 90:
            $interes = $depositoInicial * ((117 / 100) * $cantidadDias / 365);
        break;
   }
   return $interes;
}
?>