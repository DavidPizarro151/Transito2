<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/stylet.css">
</head>
<?php

include_once "../Class/AdminDatos.php";
$r=tVehiculos();
?>
<body>
<div class="cuerpo">
<table id="customers">
    <caption>Listado de vehiculos</caption>
    <thead>
        <tr >
            <th class="encabezado">NROPLA</th>
            <th class="encabezado">NOMPRO</th>
            <th class="encabezado">COLOR</th>
            <th class="encabezado">MODELO</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($r as $pap): ?>
        <tr>
            <td><?php echo $pap->NROPLA; ?></td>
            <td class=""><?php echo $pap->NOMPRO; ?></td>
            <td><?php echo $pap->COLOR; ?></td>
            <td><?php echo $pap->MODELO; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>

</body>

</html>
