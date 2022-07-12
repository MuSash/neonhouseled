<?php
require_once 'ModeloBase.php';

class ModeloProductos extends ModeloBase {
	

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

	public function allProductos($categoria, $subcat) {
		// $categoria = 1;
		// $subcat = 1;
		$db = new ModeloBase();
		$query = "SELECT * FROM `platillos` WHERE id_cat = $categoria  AND id_subcat = $subcat";
		$respuesta = $db->obtenerTodos($query)->fetchAll(PDO::FETCH_OBJ);
		return $respuesta;
	}

}