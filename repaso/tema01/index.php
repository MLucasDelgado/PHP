<?php
    $ruta = '';
    require_once 'php/encabezado.php';
?>
    <!-- Formulario para reservar turnos -->
    <form action="php/procesar-turno.php" method="POST" class="w-50 mx-auto m-3">
        <fieldset class="border p-2 bg-light opacity-75 mb-4">
            <legend class="text-primary">Datos del Paciente</legend>
            <section class="row mb-2 mx-2">
                <label for="apellido" class="form-label bg-warning text-dark p-1 bg-opacity-75 col-4">Apellido:</label>
                <input type="text" id="apellido" name="apellido" class="col-form-control mb-1 col-8">
            </section>
            <section class="row mb-2 mx-2">
                <label for="nombre" class="form-label bg-warning text-dark p-1 bg-opacity-75 col-4">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="col-form-control mb-1 col-8">
            </section>
            <section class="row mb-2 mx-2">
                <label for="dni" class="form-label bg-warning text-dark p-1 bg-opacity-75 col-4">DNI:</label>
                <input type="text" id="dni" name="dni" class="col-form-control mb-1 col-8">
            </section>
            <section class="row mb-2 mx-2">
                <label for="correo" class="form-label bg-warning text-dark p-1 bg-opacity-75 col-4">Correo:</label>
                <input type="email" id="correo" name="correo" class="col-form-control mb-1 col-8">
            </section>
            <section class="row mb-2 mx-2">
                <label for="celular" class="form-label bg-warning text-dark p-1 bg-opacity-75 col-4">Celular:</label>
                <input type="text" id="celular" name="celular" class="col-form-control mb-1 col-8">
            </section>
        </fieldset>

        <fieldset class="border p-1 bg-light opacity-75">
            <legend class="text-primary">Datos del Turno</legend>
            <section class="row mb-2 mx-2">
                <label for="vacuna" class="form-label bg-success text-white p-1 bg-opacity-75 col-4">Vacuna:</label>
                <select id="vacuna" name="vacuna" class="col-form-control mb-1 col-8">
                    <option value="">-- Seleccione --</option>
                    <option value="QDenga">QDenga</option>
                    <option value="Neumococo">Neumococo</option>
                    <option value="Antitetánica">Antitetánica</option>
                </select>
            </section>
            <section class="row mb-2 mx-2">
                <label for="fecha" class="form-label bg-success text-white p-1 bg-opacity-75 col-4">Fecha:</label>
                <input type="date" id="fecha" name="fecha" min="2024-10-14" class="col-form-control mb-1 col-8">
            </section>
            <section class="row mb-2 mx-2">
                <label for="hora" class="form-label bg-success text-white p-1 bg-opacity-75 col-4">Hora:</label>
                <select id="hora" name="hora" class="col-form-control mb-1 col-8">
                    <option value="">-- Seleccione --</option>
                    <option value="9:30-10:30">9:30 - 10:30</option>
                    <option value="10:30-11:30">10:30 - 11:30</option>
                    <option value="11:30-12:30">11:30 - 12:30</option>
                    <option value="12:30-13:30">12:30 - 13:30</option>
                    <option value="13:30-14:30">13:30 - 14:30</option>
                    <option value="14:30-15:30">14:30 - 15:30</option>
                    <option value="15:30-16:30">15:30 - 16:30</option>
                    <option value="16:30-17:30">16:30 - 17:30</option>
                </select>
            </section>
        </fieldset>
        <section class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary mt-1">Reservar Turno</button>
        </section>
       
    </form>

<?php
    require_once 'php/pie.php';
?>
