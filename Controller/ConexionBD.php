<?php
        $contraseña = "704d7df2";
        $usuario = "b83cbd60ab48bd";
        $nombre_base_de_datos = "heroku_3b1421ce951607d";
        $Conex=NULL;
        try{
            $Conex = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
            
            }
        catch(Exception $e){
                echo "Ocurrió algo con la base de datos: " . $e->getMessage();
            }	
?>
