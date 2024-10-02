<?php
    require_once("php/funciones.php");
    require_once("php/header.php");

    $comision1 = [2, 3, 5, 9, 4, 7, 3, 5, 10, 3, 6, 8];
    $comision2 = [4, 3, 1, 10, 4, 7, 4, 5, 10, 5, 10, 1, 6, 6, 8];
    $comision3 = [5, 7, 9, 3, 8, 5, 2, 7, 10, 1];

    echo '<p class="fw-bold">Estadísticas de la Comisión 1:</p>';
    verEstadisticas($comision1); echo '<hr>';

    echo '<p class="fw-bold">Estadísticas de la Comisión 2:</p>';
    verEstadisticas($comision2); echo '<hr>';

    echo '<p class="fw-bold">Estadísticas de la Comisión 3:</p>';
    verEstadisticas($comision3); echo '<hr>';

    require_once("php/footer.php");
?>