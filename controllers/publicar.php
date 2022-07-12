<?php
require_once 'models/platillos.php';

class Publicar extends Controlador

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

	function obtenerPlatillo($dato){
    $platillos = new Platillos();
    return $platillos->obtenerPlatillo($dato);
	}

	function mostrarVista()
	{
		session_start();
		if ($_SESSION['id_rol'] != 1) {
			header("Location:".URL."login");
      		die();
		} else {
					$nombre = "dashboard/index";
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

	public function obtenerCategorias() {
    $categorias = new Platillos();
    return $categorias->obtenerCategorias();
  }

  public function obtenerSubcategorias() {
    $categorias = new Platillos();
    return $categorias->obtenerSubcategorias();
  }

	public function guardarPlatillo($datos) {

    $directorio = 'imagenes/'; #Directorio donde guardamos las imagenes
    $portada = $datos['imagen'];
    $archivo = $directorio.basename($portada['name']);

    date_default_timezone_set('UTC');
    $platillo = new Platillos();
    $datos['imagen'] = $portada['name'];
    if (move_uploaded_file($portada['tmp_name'], $archivo)) {
      return $platillo->guardarPublicacion($datos);
    }
    }
    
    public function actualizarPlatillo($datos){
   	$platillo = new Platillos();
   	return $platillo->actualizarPlatillo($datos);
   }

    public function validarImagen($portada) {
    $directorio = 'imagenes/'; #Directorio en dónde guardamos la imagen
    $archivo = $directorio.basename($portada['name']);
    #basename - devuelve el nombre del archivo con su extencion.ejm:Caca.Jpeg
    #pathinfo — Devuelve información acerca de la ruta de un fichero
    $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
    #strtolower - devuelve informacio acerca de la ruta del archivo
    $validar = getimagesize($portada['tmp_name']); #Tamaño de una imagen
    if ($validar !== false) {

      #Tamaño en bytes - Dividir 1024 por kb
      #15,000 bytes = 15kb
      if ($portada['size'] > 500000) {
        $respuesta['mensaje'] = "El archivo es muy grande";
        $respuesta['codigo'] = 400;
        return json_encode($respuesta, JSON_PRETTY_PRINT);
      }

      #Validar formato
      if($tipoArchivo != "jpg" && $tipoArchivo != "png" && $tipoArchivo != "gif" && $tipoArchivo != "jpeg") {
        $respuesta['mensaje'] = "El archivo no tiene un formato válido";
        $respuesta['codigo'] = 400;
        return json_encode($respuesta, JSON_PRETTY_PRINT);
      }

      if (file_exists($archivo)) {
        $respuesta['mensaje'] = "El archivo ya existe";
        $respuesta['codigo'] = 400;
      } else {
        $respuesta['mensaje'] = "Es una imagen de tipo ".$validar['mime'];
        $respuesta['codigo'] = 200;
      }
    } else {
      $respuesta['mensaje'] = "No es una imagen";
      $respuesta['codigo'] = 400;
    }
    return json_encode($respuesta, JSON_PRETTY_PRINT);
  }

	function saludo()
	{
		echo "Metodo SALUDO de Menu<br>";
	}
}

