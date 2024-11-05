<?php
    $ruta = '../';
    require_once("encabezado.php");
    require_once("conectar.php");
    require('funciones.php');
    
    $conexion = conectar();

    if($conexion && !empty($_GET['id'])) {
        $id= $_GET['id'];

        $consulta = 'SELECT nombre, categoria, precio, foto
                    FROM articulo
                    WHERE id_articulo = ?';

        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'i', $id);
        mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $nombre, $categoria, $precio, $foto);
        mysqli_stmt_store_result($sentencia);

        $cantFilas = mysqli_stmt_num_rows($sentencia);

        if($cantFilas > 0){
            mysqli_stmt_fetch($sentencia);
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
                <form class="p-4 border rounded w-50" action="articulo_modificar_ok.php" method="POST" enctype="multipart/form-data">
                        <fieldset>
                            <legend class="text-center mb-4">Alta de Artículo</legend>

                            <label for="nombre" class="form-label">Nombre del artículo</label>
                            <input type="text" id="nombre" name="nombre" value="<?php echo $nombre ?>" class="form-control mb-3" required>

                            <label for="categoria" class="form-label">Categoría</label>
                            <input type="text" id="categoria" name="categoria" value=<?php echo $categoria ?> class="form-control mb-3" required>

                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" id="precio" name="precio" value=<?php echo $precio ?> class="form-control mb-3" required>

                            <label for="imagen" class="form-label">Subir imagen del artículo</label>
                            <input type="file" id="imagen" name="imagen" class="form-control mb-4">

                            <input type="hidden" value="<?php echo $id ?>" name="id">

                            <section>
                                <input type="submit" value="Aceptar" class="btn btn-primary me-2">
                                <a href="articulo_listado.php" class="btn btn-primary me-2">Cancelar</a>
                            </section>
                        </fieldset>
                    </form>
                </section>
            </main>
        <?php
        }
    } else {
        echo '<p>Ocurrio un error.</p>';
    }
    
    require("pie.php");
?>