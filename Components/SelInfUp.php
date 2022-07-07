<?php
$cod="";
if(isset($_POST["Buscar"])!=null || isset($_POST["INFCOD"])!=null){
    $cod2=$r["INFCOD"];
}
 if(isset($_POST["INFCOD"])!=null){
     $cod=$_POST["INFCOD"];
}
require '../Controller/ConexionBD.php';
echo '<select class="select-css" name="INFCOD">';
$query = $Conex->query("SELECT * FROM infraccion order by 1");
$sentencia = $query->fetchAll(PDO::FETCH_OBJ);
foreach ($sentencia as $row) {
    // if($cod==$row->INFCOD){
    //     echo '<option value="'.$row->INFCOD.'" selected>'.$row->INFDES.' '.$row->INFIMP.'</option>';
    // }else 
    if($cod2==$row->INFCOD){
        echo '<option value="'.$row->INFCOD.'" selected>'.$row->INFDES.' '.$row->INFIMP.'</option>';
    }else
        echo '<option value="'.$row->INFCOD.'">'.$row->INFDES.' '.$row->INFIMP.'</option>';
}
echo '</select>';

?>
