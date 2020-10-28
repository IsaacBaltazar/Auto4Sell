<?php
	require_once("../modelo/modelo.php");
	
	function instancia( ){
		$db=Database::getInstance();
		$conn = $db->getConnection();
		$MySQL = new Modelo($conn);
		return $MySQL;
	}

	function perfil($id){
		$MySQL = instancia();
		$query = $MySQL->datosPerfil($id);

		$nombre = $ApelPat = $ApelMat =  $correo = $tel = $password = null;

		foreach ($query as $filas) {
			$nombre = $filas['nombre'];
			$ApelPat = $filas['apePat'];
			$ApelMat = $filas['apeMat'];
			$correo = $filas['correo'];
			$tel = $filas['tel'];
			$password = $filas['contrasena'];
		}

		$result[] = $nombre;
		$result[] = $ApelPat;
		$result[] = $ApelMat;
		$result[] = $correo;
		$result[] = $tel;
		$result[] = $password;

		return $result;
	}	

?>

