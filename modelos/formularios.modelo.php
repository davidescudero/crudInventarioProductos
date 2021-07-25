<?php

require_once "conexion.php";

class ModeloFormularios{


	static public function mdlRegistro($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, referencia, precio,peso,categoria,stock,fecha_ultima_venta) VALUES (:nombre, :referencia, :precio, :peso, :categoria,:stock,:fecha_ultima_venta)");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":referencia", $datos["referencia"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":fecha_ultima_venta", $datos["fecha_ultima_venta"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}


	static public function mdlSeleccionarRegistros($tabla, $item, $valor){

		if($item == null && $valor == null){

			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fecha_creacion FROM $tabla ORDER BY id DESC");

			$stmt->execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT *,DATE_FORMAT(fecha_creacion, '%d/%m/%Y') AS fecha_creacion FROM $tabla WHERE $item = :$item ORDER BY id DESC");

			$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt->execute();

			return $stmt -> fetch();
		}

		$stmt->close();

		$stmt = null;	

	}


	static public function mdlActualizarRegistro($tabla, $datos){
	
		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, referencia=:referencia, precio=:precio,peso=:peso,categoria=:categoria,stock=:stock WHERE id = :id");

		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":referencia", $datos["referencia"], PDO::PARAM_STR);
		$stmt->bindParam(":precio", $datos["precio"], PDO::PARAM_STR);
		$stmt->bindParam(":peso", $datos["peso"], PDO::PARAM_STR);
		$stmt->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
		$stmt->bindParam(":stock", $datos["stock"], PDO::PARAM_STR);
		$stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}

	
	static public function mdlEliminarRegistro($tabla, $valor){
	
		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

		$stmt->bindParam(":id", $valor, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt->close();

		$stmt = null;	

	}



}