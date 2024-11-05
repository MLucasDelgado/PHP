<?php
    function formatearFecha($fecha) {
        $meses = ['enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre'];
    
        $partes = explode('-', $fecha); // separo la fecha, recibo la fecha como: 2024-11-1

        $año = $partes[0];
        $mes = $partes[1];
        $dia = $partes[2];
    
        return $dia . ' de ' . $meses[(int)$mes - 1] . ' de ' . $año; // accedo al arreglo pero primero cambio el dato mes ya que viene como un string
    }

?>