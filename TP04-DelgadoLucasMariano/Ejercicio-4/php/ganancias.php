<?php
    $ruta = '../css';
    $rutaBootstrap = '../bootstrap-5.3.3-dist';
    require_once("header.php");
    require_once("funciones.php");
?>

<section class="seccion">
    <?php
        if (!empty($_POST['dinero']) && !empty($_POST['plazo'])) {
            $mostrarDatos = calcularIntereses($_POST['dinero'], (int)$_POST['plazo']);

            echo '<p>Cantidad de dinero ingresada: <strong>$ ' . number_format($_POST['dinero'], 2) . '</strong></p>';
            echo '<p>Cantidad de dias en el plazo fijo: <strong>'  .$_POST['plazo']. ' dias</strong></p>';

            echo '<p>Su interes fue del: <strong>% ' . number_format($mostrarDatos, 2) . '</strong></p>';
            $totalDinero = $_POST['dinero'] + ($_POST['dinero'] * $mostrarDatos);

            echo '<p>Su monto total es: <strong>$ ' . number_format($totalDinero, 2) . '</strong></p>';
        } else {
            echo "<p>Faltan datos en el formulario, por favor llene todos los campos.</p>";
        }
    ?>
</section>

<?php
    require_once("footer.php");
?>