<?php
include_once 'AdminDatos.php';


// $NROPAP = "100087";
// $NROPLA = "V00001";
// $INFCOD = "I01";
// $IDPOL = "P001";
// //$PAPFECHA = date();
// $DES = 12;
// //$obj=new Papeleta($NROPAP, $NROPLA, $INFCOD, $IDPOL, $PAPFECHA);

$r=BusPap('100090');
echo $r['NROPLA'];
?>