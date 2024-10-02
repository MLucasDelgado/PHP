<?php
    $ruta = 'css';
    $rutaBootstrap = 'bootstrap-5.3.3-dist';

    require_once("php/header.php");
?>

<form action="php/ganancias.php" method="post" class="formulario">
    <fieldset class="d-flex flex-column gap-2">
        <legend class="text-center titulo">Financiera</legend>

        <article>
            <label for="deposito" class="w-100 fw-bold">Deposito Inicial:</label>
            <input type="number" name="dinero" id="deposito" class="dinero">
        </article>

        <label for="fijo" class="fw-bold">Plazo:</label>

        <article>
            <input type="radio" name="plazo" id="30" class="form-check-input borde-radio" value="30">
            <label for="30">30 días</label>
        </article>

        <article>
            <input type="radio" name="plazo" id="45" class="form-check-input borde-radio" value="45">
            <label for="45">45 días</label>
        </article>

        <article>
            <input type="radio" name="plazo" id="60" class="form-check-input borde-radio" value="60">
            <label for="60">60 días</label>
        </article>

        <article>
            <input type="radio" name="plazo" id="90" class="form-check-input borde-radio" value="90">
            <label for="90">90 días</label>
        </article>

        <input type="submit" value="Simular" class="boton">
    </fieldset>
</form>

<?php
    require_once("php/footer.php");
?>