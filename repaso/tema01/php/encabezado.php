<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vacunatorio Privado Tucumán</title>
    <link href="<?php echo $ruta;?>bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header con el título y menú -->
    <header class="bg-primary text-white p-1 bg-opacity-75">
        <h1 class="text-center">Vacunatorio Privado Tucumán</h1>
    </header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark text-white mb-4">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <section class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Calendario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $ruta;?>index.php">Turnos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $ruta;?>php/admin.php">Admin</a>
                    </li>
                </ul>
            </section>
        </nav>