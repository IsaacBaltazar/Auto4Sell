<?php
	require_once("../modelo/modelo.php");
	
	function instancia( ){
		$db=Database::getInstance();
		$conn = $db->getConnection();
		$MySQL = new Modelo($conn);
		return $MySQL;
	}

	function autos() {
		$MySQL = instancia();
		$result = $MySQL->consuAutos();
		return $result;
	}

	function a_Autos(){
		$datos = autos();
		$tblmain = "";
		foreach ($datos as $filas) {
			$tblmain .= "<tr class='text-center'>\n";
			$tblmain .= "<td>". $filas['modelo'] . "</td>\n";
			$tblmain .= "<td>". $filas['año'] . "</td>\n";
			$tblmain .= "<td>". $filas['bandera'] . "</td>\n";
			$tblmain .= "<td class='text-center'><img src='https://img.icons8.com/material-rounded/24/000000/correct-document.png'/></td> \n";
			$tblmain .= "<td class='text-center'><img src='https://img.icons8.com/metro/26/000000/erase.png'/></td> \n";
			$tblmain .= "</tr>";
		}
		return $tblmain;
	}

	function obtenerClientes(){
		$MySQL = instancia();
		$datos = $MySQL->cosuClientes();

		$clientes = "";
		foreach ($datos as $filas){
			$clientes .= "<option value='".$filas['clienteId']."'>".$filas['nombre']."</option>\n";
		}
		return $clientes;


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

