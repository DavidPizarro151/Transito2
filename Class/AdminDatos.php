<?php
// include_once 'Class/Pagos.php';
//include_once 'Class/Papeleta.php';
// include_once 'Class/Policia.php';
// include_once 'Class/Vehiculo.php';
// include_once 'Class/Infraccion.php';

function insertPag($NROPLA, $INFCOD, $IDPOL)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P1(:pNROPLA, :pINFCOD, :pIDPOL, @res)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPLA', $NROPLA, PDO::PARAM_STR, 6);
        $stmt->bindParam(':pINFCOD', $INFCOD, PDO::PARAM_STR, 3);
        $stmt->bindParam(':pIDPOL', $IDPOL, PDO::PARAM_STR, 4);
        $stmt->execute();
        $var = $Conex->query("SELECT @res")->fetch();
        return "Devuelve: " . $var[0];
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
//     DELIMITER $
// CREATE PROCEDURE P1(IN pNROPAP char(6), IN pNROPLA char(6),
// IN pINFCOD char(3), IN pIDPOL char(4), IN pDES numeric(8,1))
// BEGIN
// DECLARE pNOMPRO varchar(35);
// DECLARE pINFIMP char(3);
// SELECT NOMPRO INTO pNOMPRO FROM VEHICULO WHERE NROPLA=NEW.NROPLA;
// SELECT INFIMP INTO pINFIMP FROM INFRACCION WHERE INFCOD=NEW.INFCOD;
// INSERT INTO PAGOS SET NROPAP = pNROPAP, NROPLA=pNROPLA, NOMPRO=pNOMPRO,
// INFIMP=pINFIMP, PAPFECHA=curdate(), DESCUENTOS=pDes, TOTAL=pINFIMP-pDES;
// END $
// }

// try {
//     $sql = 'CALL BuscarP1(:pId,:pNroSem)';
//     $stmt = $Conex->prepare($sql);
//     $stmt->bindParam(':pId', $IdOper, PDO::PARAM_INT, 3);
//     $stmt->bindParam(':pNroSem', $NroSem, PDO::PARAM_INT, 3);
//     $stmt->execute();
//     $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $num= $stmt->rowCount();

//     if($num>0){
//      $r = $stmt->fetch();
//       //echo '$' . number_format($r['creditlimit'],2)
//       $ini=fechas($r['NroSem'],2022);
//       $fin=date('Y-m-d',strtotime($ini.'+6 days'));
//
//   <table class="table table-dark">
// <tbody>
// <tr>
// <th scope="row">ID</th>
// <td><?php echo $r['Id']; </td>
// </tr>

function MaxPap($NROPLA)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P2(:pNROPLA)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPLA', $NROPLA, PDO::PARAM_STR, 6);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();
        $r = $stmt->fetch();
        $stmt->closeCursor();
        return $r;

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function Bus($NROPAP)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P(:pNROPAP, @res)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPAP', $NROPAP, PDO::PARAM_STR, 6);
        $stmt->execute();
        $var = $Conex->query("SELECT @res")->fetch();
        return $var[0];
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function BusPap($NROPAP)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P3(:pNROPAP)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPAP', $NROPAP, PDO::PARAM_STR, 6);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();
        if ($num > 0) {
            $r = $stmt->fetch();
        } else {
            $r = null;
        }
        $stmt->closeCursor();
        return $r;

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function BusPapeleta($NROPAP)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P6(:pNROPAP)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPAP', $NROPAP, PDO::PARAM_STR, 6);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();
        if ($num > 0) {
            $r = $stmt->fetch();
        } else {
            $r = null;
        }    
        return $r;
        $stmt->closeCursor();

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function EliminarPap($NROPAP)
{
    try {
        include_once '../Controller/ConexionBD.php';

        $sentencia = $Conex->prepare("DELETE FROM Pagos WHERE NROPAP = ?;");
        $resultado = $sentencia->execute([$NROPAP]);
        $r = '';
        if ($resultado === true) {
            $r = "Eliminado correctamente";
        } else {
            $r = "Algo salió mal";
        }

        $sentencia->closeCursor();
        return $r;

    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function ActualizarPap($NROPAP, $NROPLA, $INFCOD, $IDPOL)
{
    try {
        //P5(IN pNROPAP char(6), IN pNROPLA char(6), IN pINFCOD char(3), IN pIDPOL char(4) )
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P5(:pNROPAP, :pNROPLA, :pINFCOD, :pIDPOL)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPAP', $NROPAP, PDO::PARAM_STR, 6);
        $stmt->bindParam(':pNROPLA', $NROPLA, PDO::PARAM_STR, 6);
        $stmt->bindParam(':pINFCOD', $INFCOD, PDO::PARAM_STR, 3);
        $stmt->bindParam(':pIDPOL', $IDPOL, PDO::PARAM_STR, 4);
        $stmt->execute();
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function ActualizarPap2($NROPAP, $NROPLA, $INFCOD, $IDPOL)
{
    try {
        //P5(IN pNROPAP char(6), IN pNROPLA char(6), IN pINFCOD char(3), IN pIDPOL char(4) )
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P5(:pNROPAP, :pNROPLA, :pINFCOD, :pIDPOL)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPAP', $NROPAP, PDO::PARAM_STR, 6);
        $stmt->bindParam(':pNROPLA', $NROPLA, PDO::PARAM_STR, 6);
        $stmt->bindParam(':pINFCOD', $INFCOD, PDO::PARAM_STR, 3);
        $stmt->bindParam(':pIDPOL', $IDPOL, PDO::PARAM_STR, 4);
        $stmt->execute();
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
// include_once "Conexion.php";
// $id = $_POST["id"];
// $nombre = $_POST["nombre"];
// $apellidos = $_POST["apellidos"];
// $genero = $_POST["genero"];
// $fechanac=$_POST["fechanac"];
// $dni=$_POST["dni"];
// $basico=$_POST["basico"];

// $sentencia = $Conex->prepare("UPDATE personal SET Nombre = ?, Apellidos = ?, Genero = ?,FechaNac=?,Dni=?,Basico=? WHERE Id = ?;");
// $resultado = $sentencia->execute([$nombre, $apellidos, $genero, $fechanac,$dni,$basico, $id]); # Pasar en el mismo orden de los ?
// if($resultado === TRUE) echo "Cambios guardados";
// else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
function tPapeleta()
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sentencia = $Conex->query("SELECT * FROM Papeleta;");
        $t = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $t;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function tVehiculos()
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sentencia = $Conex->query("SELECT * FROM Vehiculo;");
        $t = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $t;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function tPolicias()
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sentencia = $Conex->query("SELECT * FROM Policia;");
        $t = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $t;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function tPagos()
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sentencia = $Conex->query("SELECT * FROM Pagos;");
        $t = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $t;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
function tInfraccion()
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sentencia = $Conex->query("SELECT * FROM Infraccion;");
        $t = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $t;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

function insertPol($NOMPOL, $NROPAT)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P7(:pNOMPOL, :pNROPAT, @res)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNOMPOL', $NOMPOL, PDO::PARAM_STR, 35);
        $stmt->bindParam(':pNROPAT', $NROPAT, PDO::PARAM_STR, 3);
        $stmt->execute();
        $var = $Conex->query("SELECT @res")->fetch();
        return "Devuelve: " . $var[0];
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


function insertVeh($NROPLA, $NOMPRO, $COLOR, $MODELO)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P8(:pNROPLA, :pNOMPRO, :pCOLOR, :pMODELO, @res)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pNROPLA', $NROPLA, PDO::PARAM_STR, 6);
        $stmt->bindParam(':pNOMPRO', $NOMPRO, PDO::PARAM_STR, 35);
        $stmt->bindParam(':pCOLOR', $COLOR, PDO::PARAM_STR, 15);
        $stmt->bindParam(':pMODELO', $MODELO, PDO::PARAM_STR, 20);
        $stmt->execute();
        $var = $Conex->query("SELECT @res")->fetch();
        return "Devuelve: " . $var[0];
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}


function insertInfr($INFDES, $INFIMP)
{
    try {
        include_once '../Controller/ConexionBD.php';
        $sql = 'CALL P9(:pINFDES, :pINFIMP, @res)';
        $stmt = $Conex->prepare($sql);
        $stmt->bindParam(':pINFDES', $INFDES, PDO::PARAM_STR, 35);
        $stmt->bindParam(':pINFIMP', $INFIMP, PDO::PARAM_STR, 8);
        $stmt->execute();
        $var = $Conex->query("SELECT @res")->fetch();
        return "Devuelve: " . $var[0];
        $stmt->closeCursor();
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}