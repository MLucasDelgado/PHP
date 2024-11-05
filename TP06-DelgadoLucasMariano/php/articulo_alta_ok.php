<?php
    $ruta = '../';
    require("encabezado.php");

    if(!empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['precio']) && !empty($_FILES['imagen']['size'])) {
        include 'conectar.php';
        $conexion = conectar();

        if ($conexion){
            $nombre = $_POST['nombre'];
            $categoria = $_POST['categoria'];
            $precio = $_POST['precio'];
            $imagen = $_FILES['imagen']['name'];

            $consulta = 'INSERT INTO articulo(nombre, categoria, precio, foto)
                         VALUES (?,?,?,?)';

            $sentencia = mysqli_prepare($conexion, $consulta);
            mysqli_stmt_bind_param($sentencia, 'ssis', $nombre, $categoria, $precio, $imagen);
            $q= mysqli_stmt_execute($sentencia);

            if($q) {
                echo '<p>Guardado Exitoso.</p>';
                header("refresh:3; url=articulo_alta.php");
            } else {
                echo '<p>Error al guardar.</p>';
                header("refresh:3; url=articulo_alta.php");
            }

            desconectar($conexion);
        }
    } else {
        echo '<p>Llene todos los campos del formulario.';
    }

    require("pie.php");
?>