<?php
session_start();
include('../conexión/conexión.php');
if (isset($_POST['txtNom'])&& !empty($_POST['txtNom'])&&
    isset($_POST['txtApell'])&& !empty($_POST['txtApell'])&&
    isset($_POST['txtCorreo'])&& !empty($_POST['txtCorreo'])&&
    isset($_POST['txtpass2'])&& !empty($_POST['txtpass2'])) {

        $nombre=$_POST['txtNom'];
		$apellido=$_POST['txtApell'];
		$correo=$_POST['txtCorreo'];
        $contrasena=$_POST['txtpass2'];
        
		
			
        require('../conexión/conexión.php');
		$sql = "INSERT INTO usuarios(nombre,apellidos,correo,contrasena) VALUES ('$nombre','$apellido','$correo','$contrasena')";
        $resultado = $mysqli->query($sql);


		}
		if( $resultado){//Este if y else hace que refresque la pantalla al finalizar la funcion.
            header("Location: ../html/login.html");
        }
        else{
            echo "Actualización Fallida";
        }
	
	

		 

?>