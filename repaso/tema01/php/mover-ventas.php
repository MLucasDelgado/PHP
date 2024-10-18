<?php

/*
1.a) Recibir la fecha y el archivo del formulario de admin.php,
 crear la carpeta de nombre año, el cual será tomado 
 del formulario. Si la carpeta no existe, 
 deberá crearla por medio de código.

 Nota: Individualice el año, trabajando con función de cadena 
 para separar las partes de la fecha.
*/

/* 1-b)	Mediante código, mover el archivo a la carpeta indicada.
 El nombre del archivo será año-mes-dia-ventas.txt */

 
/* 1-c)Sin demoras, redireccionar a la página listar.php
*/
if(!empty($_POST['fecha']) && !empty($_FILES['archivo']['size'])){


    $fecha = $_POST['fecha'];
    $tipoArchivo = $_FILES['archivo']['size'];
    echo $tipoArchivo;


    if($tipoArchivo = 'text/plain'){

        $nombre = $_FILES['archivo']['name'];
        $ext = explode(".", $nombre);

        $rutaOrigen = $_FILES['archivo']['tmp_name'];

        $carpeta = "../año";

        $leer = implode(";", $_POST);

        if(!file_exists($carpeta)){
            echo '<p>No existe la carpeta, creando..</p>';
            mkdir($carpeta);
        }
        $nombre = "/año-mes-dia-ventas";

        $destino =  $carpeta.$nombre . '.' . $ext[1];

        $envio = move_uploaded_file($rutaOrigen, $destino);

        if($envio) {
            echo '<p>Envio exitoso</p>';
        } else {
            echo '<p>Algo fallo.</p>';
        }

        header('refresh: 0; url= listar.php?fecha=' .$fecha);
        exit();
    }
        
} else {
    echo "<p>Faltan datos</p>";
}
 ?>