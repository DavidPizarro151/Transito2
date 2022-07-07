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
    $NOMPRO = "";
    $COLOR = "";
    $MODELO = "";
}
$a='';
if (isset($_POST["Insert"])!=null) {
    $NROPLA = $_POST["NROPLA"];
    $NOMPRO = $_POST["NOMPRO"];
    $COLOR = $_POST["COLOR"];
    $MODELO = $_POST["MODELO"];
    $a=insertVeh($NROPLA, $NOMPRO, $COLOR, $MODELO);
}

?>
    <form method="POST">
    <div class="encabezado">
        <p class="titulo">Insertar Vehiculo</p>
        <p class="subtitulo">Por favor, insertar todos los datos correspondientes</p>
    </div>
    <div class="cuerpo">
        <div class="input-info"><label class="texto">Nro. Placa:</label><input class="extra" value="<?php echo $NROPLA?>" type="text" name="NROPLA" placeholder="NROPLA"></div>
        <div class="input-info"><label class="texto">Nom. Propietario:</label><input class="extra" value="<?php echo $NOMPRO?>" type="text" name="NOMPRO" placeholder="NOMPRO"></div>
        <div class="input-info"><label class="texto">Color:</label><input class="extra" value="<?php echo $COLOR?>" type="text" name="COLOR" placeholder="COLOR"></div>
        <div class="input-info"><label class="texto">Modelo:</label><input class="extra" value="<?php echo $MODELO?>" type="text" name="MODELO" placeholder="MODELO"></div>
        <?php 
        if($a=="Devuelve: Insertado"){
            echo "<div class='input-info'><label class='texto'>INSERTADO</label></div>";
        }else if($a=="Devuelve: No Insertado") {
            echo "<div class='input-info'><label class='texto'>NO INSERTADO, PLACA YA INGRESADA</label></div>";
        }
        ?>
    </div><br>
    <div class="info-boton">
        <button class="boton-submit" type="submit" name="Insert">Insertar</button>
    </div>
    </form>
</body>
</html>
