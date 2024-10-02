<?php
    $ruta = 'css';
    $rutaBootstrap = 'bootstrap-5.3.3-dist';
    require_once("php/header.php");
?>

<form action="php/consulta.php" method="post" class="formulario">
    <fieldset>
        <label for="nom">Numero de Legajo:</label>
        <input type="number" id="nom" name="numero" class="form-control mt-2">
        <input type="submit" value="Consultar" class="px-4 d-flex justify-content-center mx-auto mt-4">
    </fieldset>
</form>