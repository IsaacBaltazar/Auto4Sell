<?php
session_start();
include('../conexión/conexión.php');
if (isset($_POST['txtNom'])&& !empty($_POST['txtNom'])&&
    isset($_POST['txtApell'])&& !empty($_POST['txtApell'])&&
    isset($_POST['txtCorreo'])&& !empty($_POST['txtCorreo'])&&
    isset($_POST['txtPass2'])&& !empty($_POST['txtPass2'])) {

        $nombre=$_POST['txtNom'];
		$apellido=$_POST['txtApell'];
		$correo=$_POST['txtCorreo'];
        $contrasena=$_POST['txtPass2'];
        $resultado="";
		
			
        require('../conexión/conexión.php');
		$sql="INSERT INTO usuarios(nombre,apellidos,correo,contrasena) VALUES ('$nombre','$apellido','$correo','$contrasena')";
        $result = $mysqli->query($sql);


		}
		if($result){//Este if y else hace que refresque la pantalla al finalizar la funcion.
            header("Location: ../html/login.html");
        }
        else{
            echo "Actualización Fallida";
        }
	
	

		 

?>