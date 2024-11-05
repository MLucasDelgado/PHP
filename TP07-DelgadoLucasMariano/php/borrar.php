<?php
    $ruta = '../';
    require("encabezado.php");
    require_once("conectar.php");
    
    $conexion = conectar();
    
    if($conexion && !empty($_GET['id'])){
        $id_articulo = $_GET['id'];

        $consultaFoto = 'SELECT foto 
                        FROM articulo
                        WHERE id_articulo = ?';
        
        $sentenciaFoto = mysqli_prepare($conexion, $consultaFoto);
        mysqli_stmt_bind_param($sentenciaFoto, 'i', $id_articulo);
        mysqli_stmt_execute($sentenciaFoto);
        mysqli_stmt_bind_result($sentenciaFoto, $foto);
        mysqli_stmt_fetch($sentenciaFoto);
        mysqli_stmt_close($sentenciaFoto);

        $consulta = 'DELETE FROM articulo
                WHERE id_articulo = ?';

        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'i', $id_articulo);
        $resultado = mysqli_stmt_execute($sentencia);

        if($resultado) {
            if (!empty($foto)) {
                $rutaImagen = '../img/articulos/' . $foto;
                if (file_exists($rutaImagen)) {
                    unlink($rutaImagen);
                }
            }
            echo '<p>Eliminacion exitosa.</p>';
            header("refresh:3; url=articulo_listado.php");
        } else {
            echo '<p>No se pudo eliminar el articulo.</p>';
        }
    } else {
        echo '<p>Faltan datos.';
    }
?>