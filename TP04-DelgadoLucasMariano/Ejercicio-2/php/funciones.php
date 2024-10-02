<?php
function calculoPromedio($notas)
{
    $sumaNotas = 0;
    $cantidadNotas = 0;

    foreach ($notas as $nota) {
        $sumaNotas += $nota;
        $cantidadNotas++;
    }

    $promedio = $sumaNotas / $cantidadNotas;

    return number_format($promedio, 2);
}

function cantidadAprobados($notas)
{
    $cantidadAprobados = 0;

    foreach ($notas as $nota) {
        if ($nota >= 4) {
            $cantidadAprobados++;
        }
    }

    return $cantidadAprobados;
}

function cantidadDesaprobados($notas)
{
    $cantidadDesaprobados = 0;

    foreach ($notas as $nota) {
        if ($nota < 4) {
            $cantidadDesaprobados++;
        }
    }

    return $cantidadDesaprobados;
}

function verEstadisticas($notas)
{
    $mostrarPromedio = calculoPromedio($notas);
    $mostrarAprobado = cantidadAprobados($notas);
    $mostrarDesaprobado = cantidadDesaprobados($notas);

    echo '<p>Promedio: ' . $mostrarPromedio . '</p>';
    echo '<p>Aprobados: ' . $mostrarAprobado . '</p>';
    echo '<p>Desaprobados: ' . $mostrarDesaprobado . '</p>';
}
