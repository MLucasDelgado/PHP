<?php
    $ruta = '../';
    require_once("encabezado.php");

    if (!empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['precio']) && !empty($_FILES['imagen']['size'])) {
        include 'conectar.php';
        $conexion = conectar();

        if ($conexion) {
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $imagen = $_FILES['imagen']['name'];
            $rutaDestino = '../img/articulos/' . $imagen;

            // Insertamos los datos del artículo en la base de datos
            $consulta = 'INSERT INTO articulo(nombre, categoria, precio, foto) 
                        VALUES (?,?,?,?)';
                        
            $sentencia = mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($sentencia, 'ssis', $nombre, $categoria, $precio, $imagen);
            $q = mysqli_stmt_execute($sentencia);

            if ($q) {
                // Si la base de datos se actualizó correctamente, movemos el archivo a la carpeta deseada
                if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
                    echo '<p>Guardado Exitoso.</p>';
                    header("refresh:3; url=articulo_listado.php");
                } else {
                    echo '<p>Error al guardar la imagen en la carpeta destino.</p>';
                }
            } else {
                echo '<p>Error al guardar en la base de datos.</p>';
                header("refresh:3; url=articulo_alta.php");
            }

            desconectar($conexion);
        }
    } else {
        echo '<p>Llene todos los campos del formulario.</p>';
    }

    require("pie.php");
?>
