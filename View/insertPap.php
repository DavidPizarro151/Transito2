<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php
include_once '../Class/AdminDatos.php';

if(!isset($NROPLA)){
    $NROPLA = "";
    $INFCOD = "";
    $IDPOL = "";
}
$a='';
if (isset($_POST["Insert"])!=null) {
    $NROPLA = $_POST["NROPLA"];
    $INFCOD = $_POST["INFCOD"];
    $IDPOL = $_POST["IDPOL"];
    $a=insertPag($NROPLA, $INFCOD, $IDPOL);
}

?>
    <form method="POST">
    <div class="encabezado">
        <p class="titulo">Insertar Papeleta</p>
        <p class="subtitulo">Por favor, insertar todos los datos correspondientes</p>
    </div>
    <div class="cuerpo">
        <div class="input-info"><label class="texto">Nro. Placa:</label><input class="extra" value="<?php echo $NROPLA?>" type="text" name="NROPLA" placeholder="Placa"></div>
        <div class="input-info"><label class="texto">Inf. Codigo:</label><?php include  ("../Components/SelInf.php");?></div>
        <div class="input-info"><label class="texto">Id. Policia:</label><input class="extra" value="<?php echo $IDPOL?>" type="text" name="IDPOL" placeholder="Id Policia"></div>
        <?php 
        if($a=="Devuelve: Dato insertado"){
            echo "<div class='input-info'><a class='link' href='Boleta.php?Id=$NROPLA'>Ver Boleta</a></div>";
        }
        ?>
    </div>
    <div class="info-boton">
        <button class="boton-submit" type="submit" name="Insert">Insertar</button>
    </div>
    </form>
</body>
</html>
