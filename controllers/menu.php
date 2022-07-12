<?php

class Menu extends Controlador
{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function mostrarVista()
	{
		$modelcat = $this->cargarModelo("ModeloCategoria");
		$modelpro = $this->cargarModelo("ModeloProductos");
		$modelsubcat = $this->cargarModelo("ModeloSubCategoria");	
        $nombre = "menu/index";
        //Codigo para mostrar la Vista
        //Generar el nombre de la vista: views/consulta/index.php
        $fileName = "views/" . $nombre . ".php";

        //Incluir el archivo (codigo) de la vista
        require_once($fileName);

	}

	function saludo()
	{
		echo "Metodo SALUDO de Menu<br>";
	}
}

?>