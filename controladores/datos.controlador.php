<?php 

class ControladorDatos{

	static public function ctrMostrarDatos(){

		$respuesta = ModeloDatos::mdlMostrarDatos();

		return $respuesta;
	}
}