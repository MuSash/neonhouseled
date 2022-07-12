<?php
require_once 'ModeloBase.php';

class Platillos extends ModeloBase {

	public function __construct() {
		parent::__construct();
	}

    public function eliminarItem($dato,$tabla){
		$db = new ModeloBase();
				try {
			$eliminar = $db->eliminar($tabla, $dato);
			if ($eliminar == true) {
				$_SESSION['mensaje'] = 'Item eliminado';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}

	}

	public function obtenerPlatillos() {
		$db = new ModeloBase();
		$query = "SELECT * FROM platillos";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerCategorias() {
		$db = new ModeloBase();
		$query = "SELECT DISTINCT platillos.id_cat, categoria.nombre FROM platillos LEFT JOIN subcategoria ON platillos.id_subcat=subcategoria.id LEFT JOIN categoria ON platillos.id_cat=categoria.id";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerSubcategorias() {
		$db = new ModeloBase();
		$query = "SELECT subcategoria.id, subcategoria.nombre as nomsub, subcategoria.id_cat, categoria.nombre from subcategoria LEFT JOIN categoria ON subcategoria.id_cat=categoria.id";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerPlatCatSub(){
		$db = new ModeloBase();
		$query = "SELECT platillos.id, platillos.nombre as platdes, platillos.descripcion, platillos.precio, platillos.id_cat, id_subcat, categoria.nombre as catnom, subcategoria.nombre as subcatnom FROM platillos LEFT JOIN subcategoria ON platillos.id_subcat=subcategoria.id LEFT JOIN categoria ON platillos.id_cat=categoria.id";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function guardarPublicacion($datos) {
		$db = new ModeloBase();
		try {
			$insertar = $db->insertar('platillos', $datos);
			if ($insertar == true) {
				$_SESSION['mensaje'] = 'platillo publicado';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function mostrarArticulos($tipo, $limite) {
		$db = new ModeloBase();
		$query = "SELECT articulos.*, usuarios.apodo, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria";
		if ($tipo == 'r') {
			$query.=" WHERE tipo = 'r' ";
		} else if ($tipo == 'p'){
			$query.=" WHERE tipo = 'p' ";
		}

		$query .= " ORDER BY fecha_creacion LIMIT ".$limite;

		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function buscarArticulos($cadena, $limite) {
		$db = new ModeloBase();
		$query = "SELECT articulos.*, usuarios.apodo, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria
							WHERE titulo LIKE '%".$cadena."%'";

		$resultado = $this->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerArticulo($slug) {
		$db = new ModeloBase();
		$query = "SELECT articulos.*, usuarios.apodo, categorias.categoria FROM articulos
							LEFT JOIN usuarios ON usuarios.id = articulos.publicado_por
							LEFT JOIN categorias ON categorias.id = articulos.id_categoria
							WHERE slug = '".$slug."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerIdArticulo($slug) {
		$db = new ModeloBase();
		$query = "SELECT id FROM articulos WHERE slug = '".$slug."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function guardarComentario($datos) {
		$db = new ModeloBase();
		try {
			$insertar = $db->insertar('comentarios', $datos);
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}
	
	public function obtenerPlatillo($id_articulo) {
		$db = new ModeloBase();
		$query = "SELECT * FROM platillos WHERE id = '".$id_articulo."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}
	
	public function obtenercategoria($id_articulo) {
		$db = new ModeloBase();
		$query = "SELECT * FROM categoria WHERE id = '".$id_articulo."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function actualizarPlatillo($datos){
		$db = new ModeloBase();
		try {
			$actualizar = $db->actualizar($datos);
			if ($actualizar == true) {
				$_SESSION['mensaje'] = 'platillo actualizado';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function actualizarCategoria($datos){
		$db = new ModeloBase();
		try {
			$actualizar = $db->actualizarcat($datos);
			if ($actualizar == true) {
				$_SESSION['mensaje'] = 'Categoria actualizada';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function obtenerComentarios($id_articulo) {
		$db = new ModeloBase();
		$query = "SELECT * FROM comentarios
				  LEFT JOIN usuarios ON usuarios.id = comentarios.id_usuario
				  WHERE id_articulo = '".$id_articulo."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

}
