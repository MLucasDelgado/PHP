<?php
    $ruta = '../';
    require_once 'encabezado.php';
?>

    <form action="mover-ventas.php" method="POST" enctype="multipart/form-data" class="w-50 mx-auto m-3">
        <fieldset class="border p-3 bg-light opacity-75 mb-3">
            <legend class="text-primary">Subir Archivo de Texto</legend>

            <section class="row mb-3">
                <label for="fecha" class="col-sm-4 col-form-label bg-warning text-dark p-1 opacity-75">Fecha:</label>
                <section class="col-sm-8">
                    <input type="date" id="fecha" name="fecha" class="form-control form-control-sm" min="2024-10-03">
                </section>
            </section>

            <section class="row mb-3">
                <label for="archivo" class="col-sm-4 col-form-label bg-success text-white p-1 opacity-75">Subir Archivo de Texto:</label>
                <section class="col-sm-8">
                    <input type="file" id="archivo" name="archivo" class="form-control form-control-sm" accept=".txt">
                </section>
            </section>

        </fieldset>

        <button type="submit" class="btn btn-primary mt-2">Subir Archivo</button>
    </form>


<?php
    require_once 'pie.php';
?>