<?php
    @session_start();
    require_once("../modelo/modelo.php");

    $pass=$_POST['txtpass'];

    $passEncriptada = md5($pass);


    $params = array(
            "nombre"=>$_POST['txtNom'],
            "ape1"=>$_POST['txtApe1'],
            "ape2"=>$_POST['txtApe2'],
            "correo"=>$_POST['txtCorreo'],
            "telefono"=>$_POST['txtTel'],
            "contrasena"=>$passEncriptada,
    );

    

    //Instancia y conexión con la BD
    $db = Database::getInstance();
	$conn = $db->getConnection();
    $sesion = new Modelo($conn);
    
    //Llamar a la función 'agregaUsuario' que se encuentra en el modelo
    list ($valor, $error) = $sesion->agregaUsuario ($params);
    if( empty($valor) ){
        if($error == "d"){
            echo"<script>alert('Correo duplicado, vuelva a intentar');
            history.go(-1);
            </script>";
        }else{
            echo "<script>alert('Ocurrió un error al hacer el registro')
             window.location.href='../html/login.html'
             </script>";

        }

        
    } else {
        echo "<script>alert('Su usuario fue registrado exitosamente')
             window.location.href='../html/login.html'
             </script>";

    }

	


		 
?>