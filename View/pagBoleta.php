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
    $r=BusPap($_POST["NROPAP"]); 
    $a='Encontrado';
    if($r!=null){
        $a='Encontrado';
    }else{
        $a='No Encontrado';
    }   
}
  //Buscar Papeleta
if(isset($_POST["Pagar"])!=null){
    $NROPAP = $_POST["NROPAP"];
    EliminarPap($NROPAP);
    $a='Eliminado';
}
  
?>
<form method="POST">
<div class="encabezado">
        <p class="titulo">Insertar Pago </p>
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
        <div class="input-info"><label class="texto">Nro. Placa:       <?php echo $r['NROPLA']?></label></div>
        <div class="input-info"><label class="texto">Nom. Propietario: <?php echo $r['NOMPRO']?></label></div>
        <div class="input-info"><label class="texto">Total:            <?php echo $r['TOTAL']?></label></div>
        <div class="info-boton2">
        <button class="boton-submit" type="submit" name="Pagar">Pagar</button>
        </div>
        <?php
        }else if($a=='No Encontrado'){
            echo "<div class='input-info'><label class='texto'>NO ENCONTRADO</label></div>";
        }else if($a=='Eliminado'){
            echo "<div class='input-info'><label class='texto'>PAGADO</label></div>";
        }
        ?>
    </div>
    
</form>
</body>
</html>