<?php
    $ruta = '../';
    require("encabezado.php");
    require('funciones.php');
?>
<header class="titulo" style="padding: 10px 0; display: flex; flex-direction: row; justify-content: space-between; align-items: center; background-color: rgb(26, 26, 83); width: 100%">
    <?php
        date_default_timezone_set('America/Argentina/Buenos_Aires');
        $fechaActual = date('Y-m-d');

        // Muestra la fecha formateada en el header
        echo '<article class="ps-3 d-flex align-items-center" style="height: 100%;">';
        echo '<p class="text-white m-0">' . formatearFecha($fechaActual) . '</p>';
        echo '</article>';
        if(!empty($_GET['usuario'])){
            $nombre = $_GET['usuario'];
            // Ruta predeterminada de la imagen del usuario
            $fotoUsuario = "../img/usuarios/usuario_default.png";

            // Si el archivo de foto existe en la carpeta, cambia a esa ruta
            $rutaFoto = "../img/usuarios/" . $nombre . ".jpg";
            if (file_exists($rutaFoto)) {
                $fotoUsuario = $rutaFoto;
            }
        ?>

            <article style="display: flex; flex-direction: row; justify-content: center; align-items: center">
                <?php
                    echo '<p style="color: white; font-size: 1.1rem; margin-right: 1rem">' . $nombre . '</p>';
                    echo '<img src="' . $fotoUsuario . '" alt="Foto de usuario" style="margin-right: 2rem; width: 45px; height: 45px; border-radius: 50%;">';
                ?>
            </article>
        <?php
        }
    ?>
</header>
<main class="container py-3">
        <section class="d-flex justify-content-center">
            <form class="p-4 border rounded w-50" action="articulo_alta_ok.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center mb-4">Alta de Artículo</legend>

                    <label for="nombre" class="form-label">Nombre del artículo</label>
                    <input type="text" id="nombre" name="nombre" class="form-control mb-3" required>

                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" id="categoria" name="categoria" class="form-control mb-3" required>

                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" id="precio" name="precio" class="form-control mb-3" required>

                    <label for="imagen" class="form-label">Subir imagen del artículo</label>
                    <input type="file" id="imagen" name="imagen" class="form-control mb-4" required>

                    <button type="submit" class="btn btn-primary w-100">Dar de alta</button>
                </fieldset>
            </form>
        </section>
    </main>

<?php
    require("pie.php");
?>