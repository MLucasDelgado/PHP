<?php
$ruta = '../css';
$rutaBootstrap = '../bootstrap-5.3.3-dist';
require_once("header.php");
?>

<section class="seccion">
    <?php
    require_once("funciones.php");

    if (!empty($_POST['nombre']) && !empty($_POST['tiemp']) && !empty($_POST['turn']) && !empty($_POST['dias'])) {
        $total = 0;

        echo '<p>Horas Trabajadas: ' . $_POST['tiemp'] . '</p>';
        echo '<p>Turno: ' . $_POST['turn'] . '</p>';
        echo '<table class="tabla">';
        echo '<thead><th class="bg-dark text-white text-center">Dia</th><th class="bg-dark text-white text-center">Honorario</th></thead>';
        echo '<tbody>';

        $archivo = '../txt/';

        if (!file_exists($archivo)) {
            mkdir($archivo);
        }

        $nombre = 'pagos.txt';
        $archivo = fopen($archivo . $nombre, 'a');
        
        // Calcular el pago para cada día seleccionado
        foreach ($_POST['dias'] as $dia) {
            $trabajo = pagoDiario((int)$_POST['tiemp'], $_POST['turn'], $dia);

            echo '<tr class=""celda">';
            echo '<td class="">' . $dia . '</td>';
            echo '<td>$ ' . number_format($trabajo, 2) . '</td>';
            echo '</tr>';

            $total += $trabajo;

            $linea = $_POST['nombre'] . ';' . $_POST['tiemp'] . ';' . $_POST['turn'] . ';' . $dia . ';' . $trabajo;

            fputs($archivo, $linea . PHP_EOL);
        }
        fclose($archivo);

        echo '<tr><td>Total:</td><td>$ ' . number_format($total, 2) . '</td></tr>';
        echo '</tbody>';
        echo '</table>';
    } else {
        echo 'Faltan datos en el formulario, por favor llene todos los campos.';
    }
    ?>
</section>

<?php
require_once("footer.php");
?>