<?php
    $ruta = '../';
    require("encabezado.php");
?>

<header class="titulo" style="padding: 10px 0; display: flex; flex-direction: row; justify-content: space-between; align-items: center; background-color: rgb(26, 26, 83); width: 100%">
    <a style="margin-left: 2rem; color:white; text-decoration: none; font-size: 1rem" href="../index.php">Cerrar sesión</a>
    <?php
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

<main class="container">
    <section>
        <article class="row text-center">
            <section class="menu_tmp pt-3 pb-3">
                <a class="btn btn-dark" href="articulo_alta.php">+ Alta Artículo</a>
            </section>
            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de artículos</caption>
                    <tr>
                        <th class="bg-secondary text-white">Foto</th>
                        <th class="bg-secondary text-white">Producto</th>
                        <th class="bg-secondary text-white">Categoría</th>
                        <th class="bg-secondary text-white">Precio</th>
                    </tr>

                    <?php
                        include 'conectar.php';
                        $conexion = conectar();

                        if ($conexion) {
                            // Preparamos la consulta para obtener los datos de los artículos
                            $consulta = 'SELECT nombre, categoria, precio, foto 
                                         FROM articulo';
                                         
                            $sentencia = mysqli_prepare($conexion, $consulta);

                            if ($sentencia) {
                                // Ejecutamos la consulta
                                $q = mysqli_stmt_execute($sentencia);
                                mysqli_stmt_bind_result($sentencia, $nombre, $categoria, $precio, $foto);

                                if ($q) {
                                    // Recorremos los resultados
                                    while (mysqli_stmt_fetch($sentencia)) {
                                        // Si no hay foto, asignamos la imagen predeterminada
                                        if (!empty($foto)) {
                                            $foto = "../img/articulos/$foto";
                                        } else {
                                            $foto = "../img/articulos/sin_imagen.png";
                                        }
                                        
                                        echo "<tr>";
                                        echo "<td><img src='$foto' alt='Foto de $nombre' style='width: 45px; height: 45px;'></td>";
                                        echo "<td>$nombre</td>";
                                        echo "<td>$categoria</td>";
                                        echo "<td>$precio</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>Error al obtener los artículos.</td></tr>";
                                }

                                // Cerramos la sentencia
                                mysqli_stmt_close($sentencia);
                            } else {
                                echo "<tr><td colspan='4'>Error al preparar la consulta.</td></tr>";
                            }

                            // Cerramos la conexión
                            mysqli_close($conexion);
                        } else {
                            echo "<tr><td colspan='4'>Error al conectar a la base de datos.</td></tr>";
                        }
                    ?>
                </table>
            </section>
        </article>
    </section>
</main>

<?php
    require("pie.php");
?>