<?php
require_once 'ModeloBase.php';

class ModeloCategoria extends ModeloBase {
	

	public function __construct() {
		parent::__construct();
	}


    //guardar categoria
	// function guardarUsuarios($datos) {
	// 	$db = new ModeloBase();
	// 	$datos['id_rol'] = 2;
	// 	$insertar = $db->insertar('usuarios', $datos);
	// 	#$_SESSION['varible'] = 'valor';
	// 	if ($insertar == true) {
	// 		$_SESSION['mensaje'] = 'Registro exitoso';
	// 	}
	// }

	public function allcategorias() {

		$db = new ModeloBase();
		$query = "SELECT * FROM `categoria`";
		$respuesta = $db->obtenerTodos($query)->fetchAll(PDO::FETCH_OBJ);
		return $respuesta;
	}

	public function obtenerCategorias() {

		$db = new ModeloBase();
		$query = "SELECT * FROM `categoria`";
		$respuesta = $db->obtenerTodos($query);
		return $respuesta;
	}

	public function obtenersubCategorias() {

		$db = new ModeloBase();
		$query = "SELECT * FROM `subcategoria`";
		$respuesta = $db->obtenerTodos($query);
		return $respuesta;
	}
	
	public function obtenerSubcategoria($dato){
		$db = new ModeloBase();
		$query = "SELECT * FROM subcategoria WHERE id = '".$dato."'";
		$respuesta = $db->obtenerTodos($query);
		return $respuesta;
	}

	public function guardarCategoria($datos) {
		$db = new ModeloBase();
		try {
			$insertar = $db->insertar('categoria', $datos);
			if ($insertar == true) {
				$_SESSION['mensaje'] = 'Categoria guardada';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

		public function guardarSubcategoria($datos) {
		$db = new ModeloBase();
		try {
			$insertar = $db->insertar('subcategoria', $datos);
			if ($insertar == true) {
				$_SESSION['mensaje'] = 'Sub-Categoria guardada';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}
	
	public function actualizarSubcategoria($datos){
					$db = new ModeloBase();
		try {
			$actualizar = $db->actualizarsubcat($datos);
			if ($actualizar == true) {
				$_SESSION['mensaje'] = 'Subcategoria actualizada';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
		}

}
