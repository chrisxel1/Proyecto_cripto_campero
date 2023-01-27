<?php
sleep(1);
include('config.php');



$fechaInit = date("Y-m-d", strtotime($_POST['f_ingreso']));
$fechaFin  = date("Y-m-d", strtotime($_POST['f_fin']));

$sqlTrabajadores = ("SELECT * FROM trabajadores WHERE  `fecha_ingreso` BETWEEN '$fechaInit' AND '$fechaFin' AND sueldo >'' ORDER BY fecha_ingreso ASC");
$query = mysqli_query($con, $sqlTrabajadores);
//print_r($sqlTrabajadores);
$total   = mysqli_num_rows($query);
echo '<strong>Total: </strong> ('. $total .')';
?>

<table class="table table-hover">
    <thead>
        <tr>
            <th scope="col">#</th>
                    <th scope="col">ABIERTO</th>
                    <th scope="col">ALTO</th>
                    <th scope="col">BAJO</th>
                    <th scope="col">CIERRE</th>
                    <th scope="col">FECHA DE INGRESO</th>
        </tr>
    </thead>
    <?php
    $i = 1;
    while ($dataRow = mysqli_fetch_array($query)) { ?>
        <tbody>
            <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $dataRow['nombre'] . ' ' . $dataRow['apellido']; ?></td>
                <td><?php echo $dataRow['email']; ?></td>
                <td><?php echo $dataRow['telefono']; ?></td>
                <td><?php echo '$ ' . $dataRow['sueldo']; ?></td>
                <td><?php echo $dataRow['fecha_ingreso']; ?></td>
            </tr>
        </tbody>
    <?php } ?>
</table>