<?php
    $ruta = '../css';
    $rutaBootstrap = '../bootstrap-5.3.3-dist';
    require_once("header.php");
?>

<section class="seccion">
    <?php
        if (!empty($_POST['cuenta']) && !empty($_POST['contraseña'])) {
            echo '<p>El email que ingresaste fue: ' . $_POST['cuenta'] . '</p>';
            echo '<p>La contraseña que ingresaste fue: ' . $_POST['contraseña'] . '</p>';
        } else {
            echo "<p>Faltan datos en el formulario, por favor llene todos los campos.</p>";
        }
    ?>
</section>

<?php
    require_once("footer.php");
?>