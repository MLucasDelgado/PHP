<?php
require_once("php/header.php");
require_once("php/juegos.php");

$ventas = [];
$recaudacion = [];
$totalRecaudado = 0.0;
$totalVentas = 1000;
$ventaNumero = 1;

// Iniciamos el contador de ventas y recaudación manualmente
foreach ($juegos as $juego => $precio) {
    $ventas[$juego] = 0;
    $recaudacion[$juego] = 0.0;
}

function obtenerDescuento($ventaNumero)
{
    if ($ventaNumero <= 10) {
        return 0.80;
    } elseif ($ventaNumero <= 200) {
        return 0.60;
    } elseif ($ventaNumero <= 500) {
        return 0.40;
    } else {
        return 0.30;
    }
}

for ($i = 1; $i <= $totalVentas; $i++) {
    $juegoSeleccionado = array_rand($juegos);
    $precioOriginal = $juegos[$juegoSeleccionado];

    $descuento = obtenerDescuento($ventaNumero);
    $precioConDescuento = $precioOriginal * (1 - $descuento);

    $ventas[$juegoSeleccionado]++;
    $recaudacion[$juegoSeleccionado] += $precioConDescuento;
    $totalRecaudado += $precioConDescuento;

    $ventaNumero++;
}
?>

<section class="d-flex flex-row w-100">
    <aside class="w-25 d-flex flex-column justify-content-center mt-5">
        <?php
            foreach ($juegos as $nombre => $precio) {
                echo '<artcile><figure>';
                echo '<img src="img/' . $nombre . '.jpg" alt="juego 1" class="img-fluid">';
                echo '<figcaption class= "text-center">';
                echo $nombre;
                echo ' - ';
                echo $juegos[$nombre]; // NOTA: me da el valor de la clave, es decir "juego: $30", me muestra los $30;
                echo '</figcaption>';
                echo '</figure></artcile>';
            }
        ?>
    </aside>

    <main class="container px-4 bg-primary pt-5">
        <h2 class="text-center bg-white mb-4 py-3">Hot Sale Steam</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th class="text-center">Juegos</th>
                    <th class="text-center">Precio Original</th>
                    <th class="text-center">Cantidad Vendida</th>
                    <th class="text-center">Monto Recaudado</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($juegos as $nombre => $precio){
                ?>
                    <tr>
                        <td><?php echo $nombre; ?></td>
                        <td>$<?php echo number_format($precio, 2); ?></td>
                        <td><?php echo $ventas[$nombre]; ?></td>
                        <td>$<?php echo number_format($recaudacion[$nombre], 2); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php
        echo '<p class="fw-bold text-center bg-white py-2 my-4 w-50 m-auto">Total Recaudado: $' . number_format($totalRecaudado, 2) . '</p>';
        ?>
    </main>
</section>



<?php
require_once("php/footer.php");
?>