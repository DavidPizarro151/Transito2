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

if(!isset($NOMPOL)){
    $NOMPOL = "";
    $NROPAT = "";
}
$a='';
if (isset($_POST["Insert"])!=null) {
    $NOMPOL = $_POST["NOMPOL"];
    $NROPAT = $_POST["NROPAT"];
    $a=insertPol($NOMPOL, $NROPAT);
}

?>
    <form method="POST">
    <div class="encabezado">
        <p class="titulo">Insertar Papeleta</p>
        <p class="subtitulo">Por favor, insertar todos los datos correspondientes</p>
    </div>
    <div class="cuerpo">
        <div class="input-info"><label class="texto">Nom. Policia:</label><input class="extra" value="<?php echo $NOMPOL?>" type="text" name="NOMPOL" placeholder="Nombre"></div>
        <div class="input-info"><label class="texto">Nro. Patrulla:</label><input class="extra" value="<?php echo $NROPAT?>" type="text" name="NROPAT" placeholder="Nro. Pat "></div>
        <?php 
        if($a=="Devuelve: Insertado"){
            echo "<div class='input-info'><label class='texto'>INSERTADO</label></div>";
        }
        ?>
    </div>
    <div class="info-boton">
        <button class="boton-submit" type="submit" name="Insert">Insertar</button>
    </div>
    </form>
</body>
</html>
