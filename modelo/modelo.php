
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

		

	}

	function agregarUsuario (){
		$error = "";
		$valor = "";

		$nombre=$_POST['txtNom'];
		$ape1=$_POST['txtApe1'];
		$ape2=$_POST['txtApe2'];
		$correo=$_POST['txtCorreo'];
		$telefono=$_POST['txtTelefono'];
		$contrasena=$_POST['txtpass2'];
		
		$query = "INSERT INTO usuarios(nombre,apellidos,correo,contrasena);
		$query .= VALUES ('$nombre','$apellido','$correo','$contrasena')";

			if(!empty( $nombre ) && !empty( $ape1 ) && !empty( $correo ) ){
				if(! $this->conn->$query){
					$error = 'Ocurrio un error ejecutando el query ['. $this->conn->error .']';
				}
				$valor = $this->conn->affected_rows;
			}
		$resul[] = $valor;
		$resul[] = $error;
		return $resul;
	}
		