<?php 

class Conexion{

	static public function conectar(){
		
		$con = new PDO("mysql:host=localhost;dbname=admin-system",
			"root",
			"",
			array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                  PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

		return $con;

		
/*		if ($con) {
			echo "conectado";
		}
		else{
			echo "no conectado";
		}*/	
	}
}

$conexion = new Conexion();
$conexion->conectar();