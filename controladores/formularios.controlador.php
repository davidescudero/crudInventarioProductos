<?php

class ControladorFormularios{

	static public function ctrRegistro(){

		if(isset($_POST["registroNombre"])){

			$tabla = "producto";

			$datos = array("nombre" => $_POST["registroNombre"],
				           "referencia" => $_POST["referencia"],
				           "precio" => $_POST["precio"],
				           "peso" => $_POST["peso"],
				           "categoria" => $_POST["categoria"],
				           "stock" => $_POST["stock"],
				           "fecha_ultima_venta" => $_POST["fecha_ultima_venta"]
				       );

			$respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	static public function ctrSeleccionarRegistros($item, $valor){

		$tabla = "producto";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


	public function ctrIngreso(){

		if(isset($_POST["ingresoEmail"])){

			$tabla = "registros";
			$item = "email";
			$valor = $_POST["ingresoEmail"];

			$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

			if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]){

				$_SESSION["validarIngreso"] = "ok";

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio";

				</script>';

			}else{


				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

				</script>';

				echo '<div class="alert alert-danger">Error al ingresar al sistema, el email o la contraseña no coinciden</div>';
			}
			
			

		}

	}

	static public function ctrActualizarRegistro(){

		if(isset($_POST["actualizarNombre"])){


			$tabla = "producto";

			$datos = array("id" => $_POST["idProducto"],
							"nombre" => $_POST["actualizarNombre"],
				           "referencia" => $_POST["actualizarReferencia"],
				           "precio" => $_POST["actualizarPrecio"],
				           "peso" => $_POST["actualizarPeso"],
				           "categoria" => $_POST["actualizarCategoria"],
				           "stock" => $_POST["actualizarStock"]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}


	public function ctrEliminarRegistro(){

		if(isset($_POST["eliminarProducto"])){

			$tabla = "producto";
			$valor = $_POST["eliminarProducto"];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

			if($respuesta == "ok"){

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio";

				</script>';

			}

		}

	}


}