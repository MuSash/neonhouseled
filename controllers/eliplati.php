<?php
require_once 'models/platillos.php';

class Eliplati extends Controlador

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
		$platillos = new Platillos();

			$platill0=$platillos->obtenerPlatillo($_GET['id']);
    	foreach($platill0 as $r){                         
                $archivo='imagenes/'.$r['imagen'];
                unlink($archivo);
                          }
    		$platillos->eliminarItem($_GET['id'],"platillos");

                
		$fileName = "views/" . $nombre . ".php";
		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
		}
	}

	
}

