<?php
    $ruta = '../';
    require_once("encabezado.php");
    require_once("conectar.php");

    $conexion = conectar();

    if($conexion && !empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['precio'])) {
        
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        
        // Obtener la imagen existente de la base de datos
        $consulta = 'SELECT foto FROM articulo WHERE id_articulo = ?';
        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'i', $id); // vinculo el id a la consulta
        mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $fotoExistente); // vinculo el resultado de la consulta a la variable
        mysqli_stmt_fetch($sentencia); // el valor de la columna seleccionada (foto) se guarda en la variable
        mysqli_stmt_close($sentencia);
        
        // Manejo de la imagen
        if (!empty($_FILES['imagen']['name'])) {
            $imagen = $_FILES['imagen']['name'];
            $rutaDestino = '../img/articulos/' . $imagen;
        
            if (move_uploaded_file($_FILES['imagen']['tmp_name'], $rutaDestino)) {
                // La imagen se subio
            } else {
                echo '<h3>Error al subir la nueva imagen.</h3>';
                $imagen = $fotoExistente; // Si falla la carga, mantengo la imagen existente
            }
        } else {
            // Si no se sube una nueva imagen, almacenamos una cadena vacía en la BD y eliminamos la imagen anterior
            $imagen = '';
            if (!empty($fotoExistente)) {
                $rutaImagenExistente = '../img/articulos/' . $fotoExistente;
                if (file_exists($rutaImagenExistente)) {
                    unlink($rutaImagenExistente); // Eliminamos la imagen anterior solo si no se sube una nueva
                }
            }
        }

        $consulta = 'UPDATE articulo
                    SET nombre = ?, categoria = ?, precio = ?, foto = ?
                    WHERE id_articulo = ?';
            
        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'ssisi', $nombre, $categoria, $precio, $imagen, $id);

        $estado = mysqli_stmt_execute($sentencia);

        if ($estado) {
            echo '<h3>Actualizacion correcta.</h3>';
            header("refresh:3; url=articulo_listado.php");
        } else {
            echo '<h3>No se pudo actualizar.</h3>';
        }

        desconectar($conexion);
    } else {
        echo '<h3>Faltan datos en el formulario.</h3>';
    }
?>