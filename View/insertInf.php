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

if(!isset($INFDES)){
    $INFDES = "";
    $INFIMP = "";
}
$a='';
if (isset($_POST["Insert"])!=null) {
    $INFDES = $_POST["INFDES"];
    $INFIMP = $_POST["INFIMP"];
    $a=insertInfr($INFDES, $INFIMP);
}

?>
    <form method="POST">
    <div class="encabezado">
        <p class="titulo">Insertar infraccion</p>
        <p class="subtitulo">Por favor, insertar todos los datos correspondientes</p>
    </div>
    <div class="cuerpo">
        <div class="input-info"><label class="texto">Inf. Descripcion:</label><input class="extra" value="<?php echo $INFDES?>" type="text" name="INFDES" placeholder="INFDES"></div>
        <div class="input-info"><label class="texto">Inf. Impuesto:</label><input class="extra" value="<?php echo $INFIMP?>" type="text" name="INFIMP" placeholder="INFIMP"></div>
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
