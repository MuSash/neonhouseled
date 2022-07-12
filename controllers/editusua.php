<?php
require_once 'models/usuarios.php';

class Editusua extends Controlador

{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function obtenerPlatCatSub(){
    $platillos = new Platillos();
    return $platillos->obtenerPlatCatSub();
	}

	function mostrarVista()
	{
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header("Location:".URL."login");
      		die();
		} else {
					$nombre = "dashboard/editusua";
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

	public function accesoUsuario($datos) {
		session_start();
		$usuario = new Usuarios();
		$respuesta = $usuario->accesoUsuarios($datos['apodo'], $datos['password']);
		if ($respuesta != false) {
			foreach ($respuesta as $r) {
				$_SESSION['id_usuario'] = $r['id'];
				$_SESSION['id_rol'] = $r['id_rol'];
			}
			if ($_SESSION['id_rol'] == 1) {
				header("Location:".URL."dashboard/");
        die();
			} else {
				header("Location:".URL."login/");
        die();
			}
		}
	}

	public function obtenerUsuario($datos) {
    	$usuario = new Usuarios();
      return $usuario->obtenerUsuario($datos);
    }

   public function obtenerRoles(){
    	$roles = new Usuarios();
    	return $roles->obtenerRoles();
    }

  public function actualizarUsuario($datos){
   	$usuario = new Usuarios();
   	return $usuario->actualizarUsuario($datos);
   }
	
}

