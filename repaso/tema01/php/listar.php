<?php
    $ruta = '../';
    require_once 'encabezado.php';
/*
1-c) Sin demoras, redireccionar a la página listar.php, 
cuya tarea será mostrar, en una tabla, los datos del archivo
 subido, pero sólo de aquellas líneas que coincidan 
con el mes y el año ingresados (pasar estos datos por url).
Los datos del archivo son: año-mes-dia;dni;vacuna;cantidad

*/
if(!empty($_GET['fecha'])) {
    $mostrarFecha = $_GET['fecha'];
    $juntar = explode("-", $mostrarFecha); // Separar año, mes y día
    $añoIngresado = $juntar[0];
    $mesIngresado = $juntar[1];

    $ubicacion = "../año/año-mes-dia-ventas.txt";
    if (file_exists($ubicacion)) {
        $archivo = fopen($ubicacion, 'r');

        echo '<table class="table table-bordered text-center">
            <thead class="table-primary">
                <tr>
                    <th>Año</th>
                    <th>Mes</th>
                    <th>Dia</th> 
                    <th>DNI</th>
                    <th>Vacuna</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>';

            while (!feof($archivo)) {
                $linea = fgets($archivo);
                $separar = explode(";", $linea);
                if (count($separar) == 4) { // Validar que la línea tenga 4 elementos
                    $fecha = $separar[0]; 
                    $dni = $separar[1];
                    $vacuna = $separar[2];
                    $cantidad = $separar[3];

                    $fechaSeparada = explode("-", $fecha); // Separar año, mes y día de la fecha

                    if ($fechaSeparada[0] == $añoIngresado && $fechaSeparada[1] == $mesIngresado) {
                        // Mostrar solo las líneas que coinciden con el año y mes ingresados
                        echo "<tr class='text-center'>";
                        echo '<td class="py-2">' . $fechaSeparada[0] . '</td>';
                        echo '<td class="py-2">' . $fechaSeparada[1] . '</td>';
                        echo '<td class="py-2">' . $fechaSeparada[2] . '</td>';
                        echo '<td class="py-2">' . $dni . '</td>';
                        echo '<td class="py-2">' . $vacuna . '</td>';
                        echo '<td class="py-2">' . $cantidad . '</td>';
                        echo "</tr>";
                    }
                }
            }
        echo '</tbody></table>';
        fclose($archivo);
    } else {
        echo '<p>No se encontró el archivo para la fecha seleccionada.</p>';
    }
} else {
    echo '<p>No se ingresó una fecha.</p>';
}
    require_once 'pie.php';
?>