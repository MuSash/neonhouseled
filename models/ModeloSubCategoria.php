<?php
require_once 'ModeloBase.php';

class ModeloSubCategoria extends ModeloBase {
	

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

	public function allSubcategorias($sucCate) {

		$db = new ModeloBase();
		$query = "SELECT * FROM `subcategoria` WHERE id_cat = $sucCate";
		$respuesta = $db->obtenerTodos($query)->fetchAll(PDO::FETCH_OBJ);
		return $respuesta;
	}

}