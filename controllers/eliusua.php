<?php
require_once 'models/usuarios.php';

class Eliusua extends Controlador

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
					$nombre = "dashboard/usuario";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$usuario = new Usuarios();
    	$usuario->eliminarItem($_GET['id'],"usuarios");
		$fileName = "views/" . $nombre . ".php";
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
		}
	}

	
}

