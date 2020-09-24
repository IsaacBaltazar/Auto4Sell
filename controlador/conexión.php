<?php
    $mysqli = new mysqli("localhost", "root", "", "auto4sell");

    if($mysqli -> connect_errno){
        echo "Falló la conexión con la BD" . 
        $mysqli->connect_errno . "-----" . $mysqli->connect_error ;
    }else{
        echo "Conexión exitosa";
    }

    return $mysqli;
?>