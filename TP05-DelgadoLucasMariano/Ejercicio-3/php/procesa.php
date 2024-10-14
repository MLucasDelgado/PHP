<?php
$ruta = '../css';
$rutaBootstrap = '../bootstrap-5.3.3-dist';
require_once("header.php");
require_once("funciones.php");
?>

<section class="seccion">
    <?php
    if (!empty($_POST['nombre'])) {
        $nombre = $_POST['nombre'];

        // Llamamos a la función que obtiene los pagos de la persona
        $pagos = obtenerPagos($nombre);

        // Si hay pagos, los mostramos en una tabla junto con el nombre del personal
        if (!empty($pagos)) {
            echo '<h5 class="mb-3">Pagos realizados a ' . $nombre .'.</h5>';
            echo "<table class='table table-bordered'>";
            echo "<thead><tr><th>Día</th><th>Honorario</th></tr></thead>";
            echo "<tbody>";
            foreach ($pagos as $dia => $honorario) {
                echo "<tr><td>{$dia}</td><td>{$honorario}</td></tr>";
            }
            echo "</tbody></table>";
        } else {
            header('refresh:5 ; url = ../index.php');
            echo "No se encontraron pagos para el personal de enfermería con el nombre '$nombre'.";
        }
    } else {
        header('refresh:3 ; url = ../index.php');
        echo '<p>Faltan datos en el formulario, por favor llene todos los campos.</p>';
    }
    ?>
</section>

<?php
require_once("footer.php");
?>
