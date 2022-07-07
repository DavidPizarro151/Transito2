<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/stylet.css">
</head>
<?php

include_once "../Class/AdminDatos.php";
$r=tPolicias();
?>
<body>
<div class="cuerpo">
<table id="customers">
    <caption>Listado de Policias</caption>
    <thead>
        <tr >
            <th class="encabezado">IDPOL</th>
            <th class="encabezado">NOMPOL</th>
            <th class="encabezado">NROPAT</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($r as $pap): ?>
        <tr>
            <td><?php echo $pap->IDPOL; ?></td>
            <td><?php echo $pap->NOMPOL; ?></td>
            <td><?php echo $pap->NROPAT; ?></td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>

</body>

</html>
