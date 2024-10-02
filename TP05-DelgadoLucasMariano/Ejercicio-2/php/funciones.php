<?php
    const pago = 4000;

    function pagoDiario($horas, $turno, $dia) {
        $sueldo = $horas * pago;

        if ($turno == 'Nocturno') {
            $sueldo += ($sueldo * 0.28);
        }

        if ($dia == 'Sabado') {
            $sueldo += ($sueldo * 0.12);
        } else if ($dia == 'Domingo') {
            $sueldo += ($sueldo * 0.26);
        }

        return $sueldo;
    }
?>