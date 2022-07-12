<?php
require_once "models/usuarios.php";
class Login extends Controlador
{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function mostrarVista()
	{
		$nombre = "login/index";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . ".php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

	function login(){
		session_start();
		session_destroy();
	}

	public function accesoUsuario($datos) {
		session_start();
		//include ("models/usuarios.php");
		$usuario = new Usuarios();
		$respuesta = $usuario->accesoUsuarios($datos['apodo'], $datos['password']);
		if ($respuesta != false) {
			foreach ($respuesta as $r) {
				$_SESSION['id_usuario'] = $r['id'];
				$_SESSION['id_rol'] = $r['id_rol'];
			}
			if ($_SESSION['id_rol'] == 1) {
				header("Location:".URL."dashboard");
        die();
			} else {
				header("Location:".URL."login");
        die();
			}
		}
	}

	function saludo()
	{
		echo "Metodo SALUDO de Menu<br>";
	}
}

?>
