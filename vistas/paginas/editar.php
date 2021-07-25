<?php

if(isset($_GET["id"])){

	$item = "id";
	$valor = $_GET["id"];

	$producto = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);

}

?>


<div class="d-flex justify-content-center text-center">

	<form class="p-5 bg-light" method="post">

		<div class="form-group">
						<label for="nombre">Nombre Producto:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-user"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["nombre"]; ?>" placeholder="Escriba su nombre" id="nombre" name="actualizarNombre">
				<input type="hidden" name="idProducto" value="<?php echo $producto["id"]; ?>">
			</div>
			
		</div>

		<div class="form-group">
			<label for="nombre">Referencia:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["referencia"]; ?>" placeholder="Escriba su referencia" id="referencia" name="actualizarReferencia">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="nombre">Precio:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $producto["precio"]; ?>" placeholder="Escriba el precio" id="precio" name="actualizarPrecio">


			</div>

		</div>

		<div class="form-group">
			<label for="nombre">Peso:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="number" class="form-control" value="<?php echo $producto["peso"]; ?>" placeholder="Escriba el peso" id="peso" name="actualizarPeso">


			</div>

		</div>

		<div class="form-group">
			<label for="nombre">Categoria:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["categoria"]; ?>" placeholder="Escriba la categoria" id="categoria" name="actualizarCategoria">


			</div>

		</div>

		<div class="form-group">
			<label for="nombre">Stock:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="text" class="form-control" value="<?php echo $producto["stock"]; ?>" placeholder="Escriba el stock" id="stock" name="actualizarStock">


			</div>

		</div>		



		<?php

		$actualizar = ControladorFormularios::ctrActualizarRegistro();

		if($actualizar == "ok"){

			echo '<script>

			if ( window.history.replaceState ) {

				window.history.replaceState( null, null, window.location.href );

			}

			</script>';

			echo '<div class="alert alert-success">El Producto  ha sido actualizado</div>


			<script>

				setTimeout(function(){
				
					window.location = "index.php?pagina=inicio";

				},2000);

			</script>

			';

		}

		?>
		
		<button type="submit" class="btn btn-primary">Actualizar</button>

	</form>

</div>