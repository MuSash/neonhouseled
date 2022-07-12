<?php
require_once 'ModeloBase.php';

class Usuarios extends ModeloBase {
	public $nombre;
	public $apodo;
	public $correo;
	public $password;

	public function __construct() {
		parent::__construct();
	}

	function getNombre() {
		return $this->nombre;
	}

	function getCorreo() {
		return $this->correo;
	}

	function getPassword() {
		return $this->password;
	}

	function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	function setCorreo($correo) {
		$this->correo = $correo;
	}

	function setPassword($password) {
		$this->password = $password;
	}

	function guardarUsuario($datos) {
		$db = new ModeloBase();
		//$datos['id_rol'] = 2;
		$insertar = $db->insertar('usuarios', $datos);
		#$_SESSION['varible'] = 'valor';
		if ($insertar == true) {
			$_SESSION['mensaje'] = 'Registro exitoso';
		}
	}

	public function accesoUsuarios($apodo, $password) {

		$db = new ModeloBase();
		$query = "SELECT * FROM usuarios WHERE apodo = '".$apodo. "' AND password = '".$password . "'";
		return $respuesta = $db->consultarRegistro($query);
	}


	public function obtenerUsuarios() {
		$db = new ModeloBase();
		$query = "SELECT usuarios.id, usuarios.nombre, usuarios.apodo,usuarios.correo,  usuarios.id_rol, rol.rol from usuarios LEFT JOIN rol ON usuarios.id_rol=rol.id";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function obtenerRoles() {
		$db = new ModeloBase();
		$query = "SELECT * FROM `rol`";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
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

	public function obtenerUsuario($id_articulo) {
		$db = new ModeloBase();
		$query = "SELECT * FROM usuarios WHERE id = '".$id_articulo."'";
		$resultado = $db->obtenerTodos($query);
		return $resultado;
	}

	public function actualizarUsuario($datos){
		$db = new ModeloBase();
		try {
			$actualizar = $db->actualizarUsuario($datos);
			if ($actualizar == true) {
				$_SESSION['mensaje'] = 'platillo actualizado';
			}
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}
}
