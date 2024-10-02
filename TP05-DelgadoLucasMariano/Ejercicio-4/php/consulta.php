<?php
    $ruta = '../css';
    $rutaBootstrap = '../bootstrap-5.3.3-dist';
    require_once("header.php");

    if (!empty($_POST['numero'])) {
        $legajo = $_POST['numero'];
        $legajoNoEncontrado = true;
        

        $archivo = fopen("../sueldos.csv", 'r');

        while (!feof($archivo)) {
            $linea = fgets($archivo);
            $separar = explode(";", $linea);
            if ($legajo == $separar[0]) {
                $legajoNoEncontrado = false;
                $comparar = $separar;
            } 
        }
    } else {
        header('refresh:5 ; url = ../index.php');
        echo "<p>Ingrese el dato.</p>";
    }
?>

<section class="container border border-dark py-3 px-3">
    <?php if (!$legajoNoEncontrado && $comparar !== null) {?>
        <article class="row">
            <article class="col-2">
                <p class="fw-bold">Legajo:</p>
                <p><?php echo $comparar[0]; ?></p>
            </article>

            <article class="col-6">
                <p class="fw-bold">Apellido y nombre:</p>
                <p><?php echo $comparar[1] . ", " . $comparar[2]; ?></p>
            </article>
        </article>

        <article class="row justify-content-center">
            <article class="col-12 text-center">
                <p class="fw-bold">Sueldo a Cobrar:</p>
                <p>$ <?php echo $comparar[3]; ?></p>
            </article>
        </article>
    <?php } if($legajoNoEncontrado) {
        header('refresh: 3 ; url = ../index.php');
        echo '<p class="text-center fs-5">Legajo inexistente.</p>';
    } ?>
</section>

<?php
    require_once("footer.php");
?>

