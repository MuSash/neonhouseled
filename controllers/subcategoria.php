<?php
require_once 'models/ModeloCategoria.php';

class Subcategoria extends Controlador{

	function __construct(){

	}

	function mostrarVista()
	{
		$nombre = "dashboard/subcategoria";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
	}

	public function guardarCategoria($datos) {
    $categoria = new ModeloCategoria();
      return $categoria->guardarCategoria($datos);
    }

  public function obtenerCategorias(){
    	$categorias = new ModeloCategoria();
    	return $categorias->obtenerCategorias();
    }

  public function guardarSubcategoria($datos) {
    $categoria = new ModeloCategoria();
      return $categoria->guardarSubcategoria($datos);
    }

  public function obtenerSubcategorias(){
    	$categorias = new ModeloCategoria();
    	return $categorias->obtenerSubcategorias();
    }  

   public function obtenerSubcategoria($dato){
    	$categorias = new ModeloCategoria();
    	return $categorias->obtenerSubcategoria($dato);
    } 

   public function actualizarSubcategoria($datos){
   	    $subcategoria = new ModeloCategoria();
      return $subcategoria->actualizarSubcategoria($datos);
   } 

}

?>