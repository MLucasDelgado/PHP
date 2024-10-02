<?php
require_once('php/header.php');

const PATENTE = 'AG';

$letra1 = chr(mt_rand(65, 90));
$letra2 = chr(mt_rand(65, 90));
$numero = mt_rand(0, 999);
?>

<section>
    <?php
    if ($numero < 10) {
        echo '<p class= "text-center fw-bold fs-6" >' . PATENTE . '00' . $numero . $letra1 . $letra2 . '</p>';
    } else if ($numero >= 10 && $numero < 100) {
        echo '<p class= "text-center fw-bold fs-6">' . PATENTE . '0' . $numero . $letra1 . $letra2 . '</p>';
    } else {
        echo '<p class= "text-center fw-bold fs-6" >' . PATENTE . $numero . $letra1 . $letra2 . '</p>';
    }
    ?>
</section>


<footer class="bg-info">
    <?php
    require_once('php/footer.php');
    ?>
</footer>