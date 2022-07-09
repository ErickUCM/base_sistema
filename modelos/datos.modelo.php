<?php

require_once "conexion.php";

class ModeloDatos{

	static public function mdlMostrarDatos(){

		$stmt = Conexion::conectar()-> prepare("SELECT CODIGO_OPERACION, RUT, NOMBRE, ESTADO, 'X' as GESTION FROM DATOS"); 
		
		$stmt -> execute();

		return $stmt -> fetchAlL();

		$stmt = null;	 
	}
	
}

$datos = ModeloDatos::mdlMostrarDatos();
//print_r($datos);

?>