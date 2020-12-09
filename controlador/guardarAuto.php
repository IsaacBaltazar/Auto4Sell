<?php
    @session_start();
    require_once("../modelo/modelo.php");

    $params = array(
            "model"=>$_POST['txtMod'],
            "año"=>$_POST['txtAño'],
            "dispo"=>$_POST['txtDisp'],
    );

    

    //Instancia y conexión con la BD
    $db = Database::getInstance();
	$conn = $db->getConnection();
    $sesion = new Modelo($conn);
    
    //Llamar a la función 'agregaAuto' que se encuentra en el modelo
    list ($valor, $error) = $sesion->agregaAuto ($params);
    if( empty($valor) ){
        if($error == "d"){
            echo"<script>alert('Auto duplicado');
            history.go(-1);
            </script>";
        }else{
            echo "<script>alert('Ocurrió un error al hacer el registro')
             window.location.href='../html/login.html'
             </script>";

        }

        
    } else {
        echo "<script>alert('El auto fue registrado exitosamente')
             window.location.href='../html/autos.php'
             </script>";

    }

	


		 
?>