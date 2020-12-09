<?php
	
	require_once("../controlador/conexión.php");
	require_once("../controlador/controlador.php");
	
	
	class Modelo{
		
		private $conn;
		
		function __construct( $conexion ){
			$this->conn = $conexion;
		}

		function select( $consulta ){ 
		    $this->total_consultas++;
		    $resultado = mysqli_query($this->conn, $consulta);
		    if(!$resultado){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	
		    }
		    return $resultado;
		}
		
		function mostrarTablas( ){
			$sqlTablas = "SELECT TABLE_NAME as 'tabla' FROM INFORMATION_SCHEMA.tables ";
			$sqlTablas .= "WHERE TABLE_SCHEMA='sistema_archivos'";
			//Se ejecuta la consulta
			$resTablas = mysqli_query($this->conn, $sqlTablas);
			if( !$resTablas ){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	$alert = 'danger';
			}
			$resultado = array();
			while($row = mysqli_fetch_array($resTablas))
			{
				$resultado[] = $row['tabla'];
			}
			return $resultado;
		}

		function agregaUsuario ($params){
			$error = "";
			$valor = "";
			$nombre=$params["nombre"];
			$ape1=$params["ape1"];
			$ape2=$params["ape2"];
			$correo=$params["correo"];
			$telefono=$params["telefono"];
			$contrasena=$params["contrasena"];


			$sqlValidar = "SELECT * FROM usuarios WHERE correo = '".$correo."' ";
			$resultado = mysqli_query($this->conn, $sqlValidar);
			if(mysqli_num_rows($resultado) !=0)  {
				$error ="d";
			}else{
			
			$query = "INSERT INTO  `usuarios` (`nombre`, `apePat`, `apeMat`,`correo`, `tel`, `contrasena`)";
			$query .= " VALUES ('".$nombre."', '".$ape1."', '".$ape2."', '".$correo."','".$telefono."', '".$contrasena."');";
	
				if(!empty( $nombre ) && !empty( $ape1 ) && !empty( $correo ) ){
					if(!$this->conn->query($query)){
						$error = 'Ocurrio un error ejecutando el query ['. $this->conn->error .']';
					}
					$valor = $this->conn->affected_rows;
				}
			}
			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}

		function agregaAuto ($params){
			$error = "";
			$valor = "";
			$modelo=$params["model"];
			$añoA=$params["año"];
			$disP=$params["dispo"];
			


			
			$sqlValidar = "SELECT * FROM autos WHERE modelo = '".$modelo."' ";
			$resultado = mysqli_query($this->conn, $sqlValidar);
			if(mysqli_num_rows($resultado) !=0)  {
				$error ="d";
			}else{
			
			$query = "INSERT INTO  `autos` (`modelo`, `año`, `bandera`)";
			$query .= " VALUES ('".$modelo."', '".$añoA."', '".$disP."');";
	
				if(!empty( $modelo ) && !empty( $añoA ) && !empty( $disP ) ){
					if(!$this->conn->query($query)){
						$error = 'Ocurrio un error ejecutando el query ['. $this->conn->error .']';
					}
					$valor = $this->conn->affected_rows;
				}
			}
			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}

		function consuAutos(){
			$sql = "SELECT * FROM autos";
			$resAutos = mysqli_query($this->conn, $sql);
			if (!$resAutos) {
				$error = 'MySQL Error: ' . mysqli_connect_error();
			}
			return $resAutos;
		}

		function cosuClientes(){
			$sql = "SELECT * FROM usuarios";
			$resCliente = mysqli_query($this->conn, $sql);
			if(!$resCliente){
				$error = 'MySQL Error: ' . mysqli_connect_error();
			}
			return $resCliente;
		}

		function validaUsuario ($params) {
			$error = "";
			$valor = "";
			$user = $params['user1'];
			$pass = $params['pass1'];

			$query = "SELECT * FROM usuarios WHERE correo = '".$user."' AND contrasena = '".$pass."';";

			$resultado = mysqli_query($this->conn, $query);
			if(mysqli_num_rows($resultado) !=0)  {
				$valor = "OK";
				@session_start();
				$_SESSION["logueado"] = TRUE;
				
				while($row = mysqli_fetch_array($resultado)){
					$_SESSION["nombre"] = $row['nombre'];
					$_SESSION["usuario"] = $row['correo'];
					$_SESSION["id"] = $row['idUsuario'];
				}
			}

			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}

		function datosPerfil($id){
			$query = "SELECT * FROM usuarios WHERE idUsuario = ".$id;
			$resultado = mysqli_query($this->conn, $query);
			if(!$resultado){
				$error = 'MySQL Error: ' . mysqli_connect_error();
			}
			return $resultado;
		}

		function modificaUsuario ($params){
			$error = "";
			$valor = "";
			$nombre=$params["nombre"];
			$ape1=$params["ape1"];
			$ape2=$params["ape2"];
			$correo=$params["correo"];
			$telefono=$params["telefono"];
			$contrasena=$params["contrasena"];

			

			//INSERT INTO usuarios (nombre,apePat,apeMat,correo,tel,contrasena) VALUES ('Gerardo','Ramirez','Torres','Aaaaaa','4561295092','12345');
			
			
			$query = "UPDATE usuarios SET nombre ='".$nombre."',apePat='".$ape1."',apeMat='".$ape2."',tel='".$telefono."',contrasena='".$contrasena."' WHERE correo='".$correo."'";
	
				if(!empty( $nombre ) && !empty( $ape1 ) && !empty( $correo ) ){
					if(!$this->conn->query($query)){
						$error = 'Ocurrio un error ejecutando el query ['. $this->conn->error .']';
					}
					$valor = $this->conn->affected_rows;
				}
			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}

	}

	
?>