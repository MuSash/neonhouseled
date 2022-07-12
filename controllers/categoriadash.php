<?php
require_once 'models/ModeloCategoria.php';

class Categoriadash extends Controlador{

	function __construct(){

	}

	function mostrarVista()
	{
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header("Location:".URL."login");
      		die();
		}else{
					$nombre = "dashboard/categoria";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}
	}

	public function guardarCategoria($datos) {
    $categoria = new ModeloCategoria();
      return $categoria->guardarCategoria($datos);
    }

	public function guardarSubcategoria($datos) {
    $categoria = new ModeloCategoria();
      return $categoria->guardarCategoria($datos);
    }

   public function obtenerCategorias(){
    	$categorias = new ModeloCategoria();
    	return $categorias->obtenerCategorias();
    }

  public function obtenerSubcategorias(){
    	$categorias = new ModeloCategoria();
    	return $categorias->obtenersubCategorias();
    }


}

?>