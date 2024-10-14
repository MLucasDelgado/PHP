<?php
    require_once('php/header.php');
    
    $naipe1 = mt_rand(1, 12);
    $naipe2 = mt_rand(1, 12);

    // Obtener valor de naipe1
    if ($naipe1 >= 10) {
        $valor1 = 0.5;
    } else {
        $valor1 = $naipe1;
    }

    // Obtener valor de naipe2
    if ($naipe2 >= 10) {
        $valor2 = 0.5;
    } else {
        $valor2 = $naipe2;
    }

    $total = $valor1 + $valor2;

    // Mostrar el nombre o valor del primer naipe
    echo '<p>Naipe 1: <strong>';
    switch($naipe1) {
        case 10:
            echo "Sota";
            break;
        case 11:
            echo "Caballo";
            break;
        case 12:
            echo "Rey";
            break;
        default:
            echo $naipe1;
    }
    echo '</strong></p>';

    // Mostrar el nombre o valor del segundo naipe
    echo '<p>Naipe 2: <strong>';
    switch($naipe2) {
        case 10:
            echo "Sota";
            break;
        case 11:
            echo "Caballo";
            break;
        case 12:
            echo "Rey";
            break;
        default:
            echo $naipe2;
    }
    echo '</strong></p>';

    // Evaluar si el total es ganador
    if ($total == 9.5) {
        echo "<p>GANADOR</p>";
    } else {
        echo "<p>Puntos obtenidos: " .$total. "</p>";
    }

    require_once('php/footer.php');
?>