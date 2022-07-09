<?php

require_once "../controladores/datos.controlador.php";
require_once "../modelos/datos.modelo.php";

class ajaxDatos{

	public function MostrarDatos(){

		$respuesta = ControladorDatos::ctrMostrarDatos();

		echo json_encode($respuesta);
	}
}

$respuesta = new ajaxDatos();
$respuesta->MostrarDatos();