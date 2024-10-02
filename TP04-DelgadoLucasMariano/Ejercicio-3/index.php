<?php
    $ruta = 'css';
    $rutaBootstrap = 'bootstrap-5.3.3-dist';
    require_once("php/header.php");
?>

<form action="php/procesa.php" method="post" class="formulario">
    <fieldset class="d-flex flex-column gap-2">
        <legend>Registro enfermeria</legend><hr>
        <label for="tiempo">Horas trabajadas</label>
        <input type="number" id="tiempo" name="tiemp">

        <label for="turno">Turno</label>
        <select name="turn" id="turno">
            <option value="Mañana">Mañana</option>
            <option value="Nocturno">Nocturno</option>
        </select>

        <section class="dias">
            <label for="trabajo">Dias trabajados</label>
            <article>
                <input type="checkbox" value="Lunes" name="dias[]" id="lun">
                <label for="lun" class="semana">Lunes</label>
            </article>

            <article>
                <input type="checkbox" value="Martes" name="dias[]" id="mar">
                <label for="mar" class="semana">Martes</label>
            </article>

            <article>
                <input type="checkbox" value="Miercoles" name="dias[]" id="mierc">
                <label for="mierc" class="semana">Miercoles</label>
            </article>

            <article>
                <input type="checkbox" value="Jueves" name="dias[]" id="juev">
                <label for="juev" class="semana">Jueves</label>
            </article>

            <article>
                <input type="checkbox" value="Viernes" name="dias[]" id="vier">
                <label for="vier" class="semana">Viernes</label>
            </article>

            <article>
                <input type="checkbox" value="Sabado" name="dias[]" id="sab">
                <label for="sab" class="semana">Sabado</label>
            </article>

            <article>
                <input type="checkbox" value="Domingo" name="dias[]" id="dom">
                <label for="dom" class="semana">Domingo</label>
            </article>

        </section>

        <input type="submit" value="Calcular" class="boton">
    </fieldset>
</form>

<?php
    require_once("php/footer.php")
?>