<?php

require_once './libs/DB.php';

class ModeloBase extends DB {
	public $db;
	public $string;

	public function __construct() {
		$this->db = new DB();
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	}
	
	public function eliminar($tabla, $dato) {
		try{
			$sql="DELETE FROM $tabla WHERE id=$dato";
			$x = $this->db->query($sql);
			return $x;
		}
		 catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
		
	}

	public function insertar($tabla, $datos) {
		try {
			$llaves = array_keys($datos);
	    $sql = "INSERT INTO $tabla (".implode(", ", $llaves).") \n";
	    $sql .= "VALUES ( :".implode(", :",$llaves).")";
	    $q = $this->db->prepare($sql);
	    return $q->execute($datos);
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function consultarRegistro($query) {
		try {
			$consulta = $this->db->query($query);
			if ($consulta->rowCount() == 1) {
				return $consulta;
			} else {
				return false;
			}
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}

	public function obtenerTodos($query) {
		try {
			return $this->db->query($query);
		} catch (PDOException $e){
			echo "Error: ".$e->getMessage();
		}
	}
	public function actualizar($datos) {
		$nom=$datos['nombre'];
		$des=$datos['descripcion'];
		$pre=$datos['precio'];
		$idcat=$datos['id_cat'];
		$idsubcat=$datos['id_subcat'];
		$idd=$datos['id'];

		try {
		$sql="UPDATE platillos SET `nombre`='$nom', `descripcion`='$des', `precio`='$pre', `id_cat`='$idcat', `id_subcat`='$idsubcat' WHERE id=$idd";
	    $q = $this->db->query($sql);
	    return $q;
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}
	public function actualizarcat($datos) {
		$nom=$datos['nombre'];
		$idd=$datos['id'];
		try {
		$sql="UPDATE categoria SET `nombre`='$nom' WHERE id=$idd";
	    $q = $this->db->query($sql);
	    return $q;
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function actualizarsubcat($datos) {
		$nom=$datos['nombre'];
		$idd=$datos['id'];
		try {
		$sql="UPDATE subcategoria SET `nombre`='$nom' WHERE id=$idd";
	    $q = $this->db->query($sql);
	    return $q;
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

	public function actualizarUsuario($datos) {
		$nom=$datos['nombre'];
		$idd=$datos['id'];

		$id=$datos['id'];
        $nombre= $datos['nombre'];
        $apodo= $datos['apodo'];
        $password= $datos['password'];
        $correo= $datos['correo'];
        $id_rol= $datos['id_rol'];

		try {
		$sql="UPDATE usuarios SET `nombre`='$nombre',`apodo`='$apodo',`password`='$password',`correo`='$correo',`id_rol`='$id_rol' WHERE id=$id";
	    $q = $this->db->query($sql);
	    return $q;
		} catch (PDOException $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		} catch (Exception $e) {
			$_SESSION['mensaje'] = $e->getMessage();
		}
	}

}
