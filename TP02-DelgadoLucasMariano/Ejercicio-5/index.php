<?php
    require_once('php/header.php');
    
    $naipe1 = mt_rand(1, 12);
    $naipe2 = mt_rand(1, 12);

    function obtenerValor($carta) {
        if ($carta >= 10) {
            return 0.5;
        }
        return $carta;
    }

    $valor1 = obtenerValor($naipe1);
    $valor2 = obtenerValor($naipe2);
    $total = $valor1 + $valor2;

    function obtenerNombre($carta) {
        switch($carta) {
            case 10:
                $respuesta = "Sota";
                echo '<strong>' .$respuesta. '</strong>';
            break;
            case 11:
                $respuesta = "Caballo";
                echo '<strong>' .$respuesta. '</strong>';
            break;
            case 12:
                $respuesta = "Rey";
                echo '<strong>' .$respuesta. '</strong>';
            break;
            default:
                return $carta;
        }
    }
?>

<section class="mx-3">
    <p>Naipe 1: <strong><?php echo obtenerNombre($naipe1); ?></strong></p>
    <p>Naipe 2: <strong><?php echo obtenerNombre($naipe2); ?></strong></p>
    <?php
         if ($total == 9.5) {
            echo "<p>GANADOR</p>";
        } else {
            echo "<p>Puntos obtenidos: " .$total. "</p>";
        }
    ?>
</section>

<?php
    require_once('php/footer.php');
?>