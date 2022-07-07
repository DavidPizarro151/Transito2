<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/stylet.css">
</head>
<?php

include_once "../Class/AdminDatos.php";
$r=tPagos();
?>
<body>
<div class="cuerpo">
<table id="customers">
    <caption>Listado de Pagos</caption>
    <thead>
        <tr >
            <th class="encabezado">NROPAP</th>
            <th class="encabezado">NROPLA</th>
            <th class="encabezado">NOMPRO</th>
            <th class="encabezado">INFIMP</th>
            <th class="encabezado">PAPFECHA</th>
            <th class="encabezado">DESCUENTOS</th>
            <th class="encabezado">TOTAL</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($r as $pap): ?>
        <tr>
            <td><?php echo $pap->NROPAP; ?></td>
            <td><?php echo $pap->NROPLA; ?></td>
            <td><?php echo $pap->NOMPRO; ?></td>
            <td><?php echo $pap->INFIMP; ?></td>
            <td><?php echo $pap->PAPFECHA; ?></td>
            <td><?php echo $pap->DESCUENTOS; ?></td>
            <td><?php echo $pap->TOTAL; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>

</body>

</html>
