<?php

session_start();
include('../conexión/conexión.php');
if (isset($_POST['login'])) {
	//VARIABLES DEL USUARIO
$user = $_POST['txtusuario'];
$pass = $_POST['txtpass'];
//VALIDAR CONTENIDO EN LAS VARIABLES O CAJAS DE TEXTO
if (empty($user) | empty($pass)) 
	{
	header("Location: ../html/login.html");
	exit();
	}
//VALIDANDO EXISTENCIA DEL USUARIO
		




		$sql="SELECT * FROM usuarios WHERE correo = '$user' and contrasena = '$pass'";
		$result = $mysqli->query($sql);
		if ($row = $result->fetch_assoc()) 
			{
                
                echo "Bienvenido :D";
		 
				//header();
			}
			else
			{

				header("");
				exit();
			}

		
			

		 
}
?>