<?php
    require_once('php/header.php');
    const CRYPTO = 1322.74;
?>

<article class="mx-2">
    <?php
    $numero = mt_rand(200000, 400000);
    echo '<p>Dinero disponible: <strong>$' . $numero . '</strong></p>';

    if ($numero < 300000) {
        echo '<p>Comision: <strong>1% </strong></p>';
        $numero -= ($numero * 0.01);
        echo '<p>Dinero restante: <strong>$' . $numero . '</strong></p>';
    } else {
        echo '<p>Comision: <strong>0.5% </strong></p>';
        $numero -= ($numero * 0.005);
        echo '<p>Dinero restante: <strong>$' . $numero . '</strong></p>';
    }

    echo '<p>Cotizacion USDT: <strong>$' . CRYPTO . '</strong></p>';
    $dolaresComprados = $numero / CRYPTO;
    echo '<p>USDT adquiridos: <strong>$', number_format($dolaresComprados, 4), '</strong></p>';
    ?>
</article>

<?php
    require_once('php/footer.php');
?>