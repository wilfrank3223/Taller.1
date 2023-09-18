<?php

$conexion = new mysqli('localhost','root','','prueba_1');
if ($conexion->connect_errno){
    die('lo siento hubo o un problema en la conexion');
    }else{
        $sql = "INSERT INTO usuarios (ID,nombre,edad)VALUES(null,'sonia',30)";
        $resultado = $conexion->query($sql);
        
        if($conexion->affected_rows >=1){
            echo 'filas agredas: '. $conexion->affected_rows;
        }
    }

?>
