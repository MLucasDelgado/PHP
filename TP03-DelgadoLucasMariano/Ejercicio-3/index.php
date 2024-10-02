<?php
    require_once("php/header.php")
?>

<section class="d-flex flex-row justify-content-evenly w-100">
   <article>
        <h4 class="text-center">Mi cartón</h4>
        <table class="border text-white bg-primary ml-4">
            <?php
            $numeros = array(1, 5, 12, 4, 16, 22, 11, 19, 10, 7);

            echo '<table class="border text-white">';
            echo '<tbody>';
            
            $totalNumeros = 10;
            for ($i = 0; $i < $totalNumeros; $i++) {
                if ($i % 2 == 0) {
                    echo '<tr>'; // Inicia una nueva fila cada 2 números
                }
                echo '<td class="border p-3 text-center">' . $numeros[$i] . '</td>';
                if ($i % 2 == 1) {
                    echo '</tr>';
                }
            }
            echo '</tbody></table>';
            ?>
        </table>
    </article>

    <article>
        <h4 class="text-center">Sorteo</h4>
        <?php
            $sorteo = array();
            $numerosSorteados = 0;

            while ($numerosSorteados < 10){
                $numerosRandom = mt_rand(1,22);
                if(!in_array($numerosRandom, $sorteo)){
                    $sorteo[] = $numerosRandom;
                    $numerosSorteados++;
                }
               
            }
            
            sort($sorteo);

            echo '<table class= "border text-white mx-auto">';
            echo '<tbody>';
            for ($i = 0; $i < 10; $i++) {
                if ($i % 2 == 0) {
                    echo '<tr>';
                }
                echo '<td class="border p-3 text-center">' .$sorteo[$i]. '</td>';
                if ($i % 2 == 1) {
                    echo '</tr>'; // Cierra la fila después de 2 números
                }
            }
            echo '</tbody></table>';

            $aciertos = 0;
            foreach ($numeros as $num) {
                if (in_array($num, $sorteo)) {
                    $aciertos++;
                }
            }

            echo '<p class="py-3 fw-bold">Obtuviste la cantidad de aciertos: ' . $aciertos . '</p>';

            if($aciertos == 10){
                echo "<p>Ganador del pozo de: $35.000.000";
            }
        ?>
    </article>
</section>

<?php
    require_once("php/footer.php");
?>


