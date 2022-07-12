<?php
require_once "models/usuarios.php";
class Cerrar extends Controlador
{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function mostrarVista()
	{
		session_start();
		session_destroy();
		header("Location:".URL."login");
	}

}

?>
