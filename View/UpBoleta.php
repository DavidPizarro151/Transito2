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
if (!isset($NROPAP)) {
    $NROPAP = "";
}
$a = '';
$r=null;

if (isset($_POST["Buscar"]) != null) {
    $NROPAP = $_POST["NROPAP"]; 
    $r=BusPapeleta($_POST["NROPAP"]); 
    $a='Encontrado';
    if($r!=null){
        $a='Encontrado';
    }else{
        $a='No Encontrado';
    }   
}
if(isset($_POST["Actualizar"]) != null){
    $NROPAP = $_POST["NROPAP"]; 
    $NROPLA = $_POST["NROPLA"];
    $INFCOD = $_POST["INFCOD"]; 
    $IDPOL = $_POST["IDPOL"]; 

    ActualizarPap($NROPAP, $NROPLA, $INFCOD, $IDPOL);
    $a='Actualizado';
}
  //Buscar Papeleta

  
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
        <button class="boton-search" type="submit" name="Buscar">
            <img class="search" src="../Images/search.png" height ="20" width="20" /></button></div>
            <?php
        if ($r != null) {
        ?>
        <div class="input-info"><label class="texto">Nro. Placa:</label><input class="extra" value="<?php echo $r["NROPLA"]?>" type="text" name="NROPLA" placeholder="Placa"></div>
        <div class="input-info"><label class="texto">Inf. Codigo:</label><?php include  ("../Components/SelInfUp.php");?></div>
        <div class="input-info"><label class="texto">Id. Policia:</label><input class="extra" value="<?php echo $r["IDPOL"]?>" type="text" name="IDPOL" placeholder="Id Policia"></div>
        <div class="info-boton2">
        <button class="boton-submit" type="submit" name="Actualizar">Actualizar</button>
        </div>
        <?php
        }else if($a=='No Encontrado'){
            echo "<div class='input-info'><label class='texto'>NO ENCONTRADO</label></div>";
        }else if($a=='Actualizado'){
            echo "<div class='input-info'><label class='texto'>Actualizado</label></div>";
        }
        ?>
    </div>
    
</form>
</body>
</html>