<?php
require_once 'models/platillos.php';

class Editsub extends Controlador

{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function mostrarVista()
	{
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header("Location:".URL."login");
      		die();
		} else {
					$nombre = "dashboard/editsub";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");	
		}
	}

	function login(){
		session_start();
    	session_destroy();
	}

	public function obtenerCategoria($dato){
		 $platillos = new Platillos();
    return $platillos->obtenerCategoria($dato);
	}
}

