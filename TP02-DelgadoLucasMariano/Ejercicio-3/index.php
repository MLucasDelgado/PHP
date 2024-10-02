<?php
    require_once('php/header.php');
    $letra = chr(mt_rand(65, 71));
?>

<article class="px-5">
    <?php
    switch ($letra) {
        case 'A':
            echo '<h4> Categoria A </h4>';
            echo '<p>Ciclomotores, motocicletas y triciclo motorizados. </p>';
            break;

        case 'B':
            echo '<h4> Categoria B </h4>';
            echo '<p>Automóviles y camionetas con acoplado de hasta 720kg de peso o casa rodante, y las comprendidas en la clase A. </p>';
            break;

        case 'C':
            echo '<h4> Categoria C </h4>';
            echo '<p>Camiones sin acoplados y los comprendidos en la clase B. </p>';
            break;

        case 'D':
            echo '<h4> Categoria D </h4>';
            echo '<p>Los destinados al servicio de transporte de pasajeros, emergencias o seguridad y los comprendidos en las clases B o C, según el caso. </p>';
            break;

        case 'E':
            echo '<h4> Categoria E </h4>';
            echo '<p>Camiones articulados o con acoplado, maquinaria especial no agrícola y los comprendidos en las clases B o C. </p>';
            break;

        case 'F':
            echo '<h4> Categoria F </h4>';
            echo '<p>Automotores especialmente adaptados para discapacitados. Comprende los automotores incluidos en las clases B y profesionales, según el caso, con la descripción de la adaptación que corresponda a la discapacidad de su titular. </p>';
            break;

        case 'G':
            echo '<h4> Categoria G </h4>';
            echo '<p>Tractores y maquinarias agrícolas. </p>';
            break;
    }
    ?>
</article>
<?php
    require_once('php/footer.php');
?>