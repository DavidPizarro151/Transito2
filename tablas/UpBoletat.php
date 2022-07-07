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
    $NROPAP=$_GET['Id'];
    $NROPLA=$_GET['Cod'];
    $INFCOD=$_GET['Inf'];
    $IDPOL=$_GET['Pol'];
    echo $NROPAP;
    echo $NROPLA;
    echo $INFCOD;
    echo $IDPOL;
    $a='';
    if(isset($_POST["Actualizar"]) != null){
        $NROPAP = $_POST["NROPAP"]; 
        $NROPLA = $_POST["NROPLA"];
        $INFCOD = $_POST["INFCOD"]; 
        $IDPOL = $_POST["IDPOL"]; 
    
        ActualizarPap($NROPAP, $NROPLA, $INFCOD, $IDPOL);
        $a='Actualizado';
    }
?>
<form method="POST">
<div class="encabezado">
        <p class="titulo">Actualizar Papeleta</p>
        <p class="subtitulo">Por favor, insertar todos los datos correspondientes</p>
</div>
<div class="cuerpo">
        <div class="input-info">
        <label class="texto">Nro. Papeleta:</label>
        <input class="extra" value="<?php echo $NROPAP ?>" type="text" name="NROPAP" placeholder="Papeleta">
        </div>
        <div class="input-info"><label class="texto">Nro. Placa:</label><input class="extra" value="<?php echo $NROPLA ?>" type="text" name="NROPLA" placeholder="Placa"></div>
        <div class="input-info"><label class="texto">Inf. Codigo:</label><?php include "../Components/SelInfGet.php";?></div>
        <div class="input-info"><label class="texto">Id. Policia:</label><input class="extra" value="<?php echo $IDPOL ?>" type="text" name="IDPOL" placeholder="Id Policia"></div>
        <div class="info-boton2">
        <button class="boton-submit" type="submit" name="Actualizar">Actualizar</button>
        </div>
        <?php
if ($a == 'Actualizado') {
    echo "<br><br><div class='input-info'><label class='texto'>Actualizado</label><a class='link' href='tPapeletas.php'>Regresar</a></div>";
}
?>
    </div>

</form>
</body>
</html>