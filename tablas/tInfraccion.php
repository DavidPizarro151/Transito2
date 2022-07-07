<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/stylet.css">
</head>
<?php

include_once "../Class/AdminDatos.php";
$r=tInfraccion();
?>
<body>
<div class="cuerpo">
<table id="customers">
    <caption>Listado de Infracciones</caption>
    <thead>
        <tr >
            <th class="encabezado">INFCOD</th>
            <th class="encabezado">INFDES</th>
            <th class="encabezado">INFIMP</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($r as $pap): ?>
        <tr>
            <td><?php echo $pap->INFCOD; ?></td>
            <td><?php echo $pap->INFDES; ?></td>
            <td><?php echo $pap->INFIMP; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>

</body>

</html>
