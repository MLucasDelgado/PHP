<?php
    $ruta = '../';
    require("encabezado.php");
    require('funciones.php');

    $id = $_GET['id'];
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
<main class="d-flex justify-content-center align-items-center login">
    <section class="text-center">
        <article>
            <h1 class="mb-3 text-white">Eliminar artículo</h1>
            <p class="mb-4 text-white">¿Está seguro que quiere eliminar el artículo <strong><?php if(!empty($_GET['nombre'])){echo $_GET['nombre'];}?></strong>?</p>
        </article>

        <section>  
            <a href="borrar.php?id=<?php echo $id; ?>" class="btn btn-primary me-2">Aceptar</a>
            <a href="articulo_listado.php" class="btn btn-primary me-2">Cancelar</a>
        </section>
    </section>
</main>
   
<?php
    require("pie.php");
?>