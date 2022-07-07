<?php
        $contraseña = "12345";
        $usuario = "root";
        $nombre_base_de_datos = "Transito";
        $Conex=NULL;
        try{
            $Conex = new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
            
            }
        catch(Exception $e){
                echo "Ocurrió algo con la base de datos: " . $e->getMessage();
            }	
?>
