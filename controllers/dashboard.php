<?php
class Dashboard extends Controlador
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
			$nombre = "dashboard/index";
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


	function saludo()
	{
		echo "Metodo SALUDO de Menu<br>";
	}
}

?>
