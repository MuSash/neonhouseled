<?php
require_once 'models/usuarios.php';

class Usuario extends Controlador{

	function __construct(){

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
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");
		}
	}

	public function guardarUsuario($datos) {
    	$usuario = new Usuarios();
      return $usuario->guardarUsuario($datos);
    }

    public function obtenerUsuarios(){
    	$usuarios = new Usuarios();
    	return $usuarios->obtenerUsuarios();
    }

        public function obtenerRoles(){
    	$roles = new Usuarios();
    	return $roles->obtenerRoles();
    }

}

?>
