<?php
    $ruta = '../';
    require_once '../html/header.html';

/* 1-a)	Controle los datos que provienen del formulario que se encuentra en el archivo index.php. */

/* 1-b) Llame a la función fnCobro ($tipo, $litros), que se encontrará en el archivo 
funciones.php */ 

/* 1-d) A continuación, en surtidor.php, mostrar DNI, tipo de combustible, litros y precio total.*/

    require_once('funciones.php');

    if(!empty($_POST['dni']) && !empty($_POST['combustible']) && !empty($_POST['litros'])) {
        $dni = $_POST['dni'];
        $tipo = $_POST['combustible'];
        $litros = $_POST['litros'];

        echo '<h4 class="text-center">Datos llenados por el usuario:</h4>';

        echo "<p>Su DNI es: $dni";
        echo "<p>Su tipo de combustible es: <strong>$tipo</strong>.</p>";
        echo "<p>La cantidad de litros es de: <strong>$litros</strong>.</p>";
        echo "<p>El precio total es de: <strong>$" . number_format(fnCobro($tipo, $litros), 2, ',', '.') . "</strong></p>";
    } else {
        echo '<p class="text-center">Por favor llenar todos los campos del formulario.</p>';
        header('refresh: 2; url=../index.php');
    }

    require_once '../html/footer.html';
?>