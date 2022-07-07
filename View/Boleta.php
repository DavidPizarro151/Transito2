<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once '../Class/AdminDatos.php';
    $id=$_GET['Id'];
    // imprimir datos de la ultima Infraccion
    // habilitar otra web para ver todas las infracciones por pagar y las ya pagadas

    $datos=MaxPap($_GET['Id']);
    $datos['NOMPRO'];
    ?>
    <div class="encabezado2">
        <p class="titulo">Datos De La Papeleta</p>
    </div>
    <div class="imagen">
        <img class="redimensionar" src="../Images/<?php echo $id?>.jpg" >
    </div>
    <div class="info-tabla">
        <table class="tabla">
            <tr>
            <th>Nro. Papeleta</th>
            <td><?php echo $datos['NROPAP']?></td>
            </tr>
            <tr>
            <th>Nro. Placa</th>
            <td><?php echo $datos['NROPLA']?></td>
            </tr>
            <tr>
            <th>Nombre Propietario</th>
            <td><?php echo $datos['NOMPRO']?></td>
            </tr>
            <tr>
            <th>Inf. Impuesto</th>
            <td><?php echo $datos['INFIMP']?></td>
            </tr>
            <tr>
            <th>Pap. Fecha</th>
            <td><?php echo $datos['PAPFECHA']?></td>
            </tr>
            <tr>
            <th>Descuento</th>
            <td><?php echo $datos['DESCUENTOS']?></td>
            </tr>
            <tr>
            <th>Total</th>
            <td><?php echo $datos['TOTAL']?></td>
            </tr>
        </table>
    </div>
    <div class="final">
        <a class="link" href="insertPap.php">Regresar</a>
    </div>
</body>
</html>
