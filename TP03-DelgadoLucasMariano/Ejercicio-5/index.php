<?php
require_once("php/header.php");

$matriz = [];
for ($i = 0; $i < 10; $i++) {
    $fila = [];
    for ($j = 0; $j < 10; $j++) {
        $fila[] = "-";
    }
    $matriz[] = $fila;
}

$bombas = 10;
while ($bombas > 0) {
    $fila = rand(0, 9);
    $columna = rand(0, 9);

    if ($matriz[$fila][$columna] !== "B") {
        $matriz[$fila][$columna] = "B";
        $bombas--;
    }
}

?>
<section class="pt-5">
    <h3 class="text-center">Buscaminas</h3>
    <table class="mx-auto w-25 table table-bordered">
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo '<tr>';
            for ($j = 0; $j < 10; $j++) {
                if ($matriz[$i][$j] === "-") {
                    echo '<td class= "p-0"><img src="img/vacio.jpg" alt="vacío" width="30" height="30"></td>';
                } else {
                    echo '<td class= "p-0"><img src="img/mina.jpg" alt="mina" width="30" height="30"></td>';
                }
            }
            echo '</tr>';
        }
        ?>
    </table>
</section>

<?php
$puntos = 0;
$encontradoBomba = false;
$coordenadaBomba = [];

while (!$encontradoBomba) {
    $fila = rand(1, 10) - 1;
    $columna = rand(1, 10) - 1;

    if ($matriz[$fila][$columna] === "-") {
        $puntos++;
    } else if ($matriz[$fila][$columna] === "B") {
        $encontradoBomba = true;
        $coordenadaBomba = [$fila + 1, $columna + 1]; // Guardamos la coordenada de la bomba encontrada
    }
}

?>
<section class="pt-3">
    <h4 class="text-center">Resultado de la partida</h4>
    <p class="text-center">Puntos obtenidos: <?php echo $puntos; ?></p>
    <p class="text-center">Coordenada de la bomba: (<?php echo $coordenadaBomba[1]; ?>, <?php echo $coordenadaBomba[0]; ?>)</p>
</section>

<?php
    require_once("php/footer.php")
?>
