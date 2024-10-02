<?php
$ruta = '../css';
$rutaBootstrap = '../bootstrap-5.3.3-dist';
require_once("header.php");
?>

<section class="seccion">
    <?php
    if (!empty($_POST['cuenta']) && !empty($_POST['contraseña'])) {
        // Elimino espacios en blanco
        $email = trim($_POST['cuenta']);
        $contraseña = trim($_POST['contraseña']);

        $archivo = fopen('../usuarios.txt', 'r');
        $usuarioEncontrado = false;

        while (!feof($archivo)) {

            $linea = fgets($archivo);

            if (trim($linea) != '') {
                $separar = explode(';', trim($linea));

                if (($email === $separar[0]) && ($contraseña === $separar[1])) {
                    $usuarioEncontrado = true;
                    $nombreUsuario = $separar[0];
                    $fotoUsuario = $separar[2];
                    header('refresh:0.5; url=listado.php?usuario=' . $nombreUsuario . '&foto=' . $fotoUsuario);
                    break;
                } 
            }
        }
        if(!$usuarioEncontrado) {
            header('refresh:3 ; url = ../index.php');
            echo '<p>Datos incorrectos.';
        }
        fclose($archivo);
    } else {
        header('refresh:3 ; url = ../index.php');
        echo "<p>Faltan datos en el formulario, por favor llene todos los campos.</p>";
    }
    ?>
</section>

<?php
require_once("footer.php");
?>