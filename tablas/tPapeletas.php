<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="../css/stylet.css">
</head>
<?php

include_once "../Class/AdminDatos.php";
$r=tPapeleta();
?>
<body>
<div class="cuerpo">
<table id="customers">
    <caption>Listado de Papeletas</caption>
    <thead>
        <tr >
            <th class="encabezado">NROPAP</th>
            <th class="encabezado">NROPLA</th>
            <th class="encabezado">INFCOD</th>
            <th class="encabezado">IDPOL</th>
            <th class="encabezado">PAPFECHA</th>
        </tr>
    </thead>
    <tbody>

    <?php foreach ($r as $pap): ?>
        <tr>
            <td><?php echo $pap->NROPAP; ?></td>
            <td class=""><?php echo $pap->NROPLA; ?></td>
            <td><?php echo $pap->INFCOD; ?></td>
            <td><?php echo $pap->IDPOL; ?></td>
            <td><?php echo $pap->PAPFECHA; ?></td>
            <td><a href="UpBoletat.php?Id=<?php echo $pap->NROPAP; ?>&Cod=<?php echo  $pap->NROPLA?>&Inf=<?php echo $pap->INFCOD ?>&Pol=<?php echo $pap->IDPOL?>">Actualizar</a>
            
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>

</body>

</html>
