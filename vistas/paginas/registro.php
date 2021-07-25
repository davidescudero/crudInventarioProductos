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

				<input type="text" class="form-control" id="nombre" name="registroNombre">

			</div>
			
		</div>

		<div class="form-group">

			<label for="email">Referencia:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="referencia" name="referencia">
			
			</div>
			
		</div>

		<div class="form-group">
			<label for="precio">Precio:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="number" class="form-control" id="precio" name="precio">

			</div>

		</div>

		<div class="form-group">
			<label for="peso">Peso:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="number" class="form-control" id="peso" name="peso">

			</div>

		</div>

		<div class="form-group">
			<label for="categoria">Categoria:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="categoria" name="categoria">

			</div>

		</div>

		<div class="form-group">
			<label for="stock">Stock:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="text" class="form-control" id="stock" name="stock">

			</div>

		</div>

		<div class="form-group">
			<label for="fecha_ultima_venta">Fecha ultima venta:</label>

			<div class="input-group">
				
				<div class="input-group-prepend">
					<span class="input-group-text">
						<i class="fas fa-align-justify"></i>
					</span>
				</div>

				<input type="date" class="form-control" id="fecha_ultima_venta" name="fecha_ultima_venta">

			</div>

		</div>

		<?php 

		$registro = ControladorFormularios::ctrRegistro();

		if($registro == "ok"){

			echo '<script>

				if ( window.history.replaceState ) {

					window.history.replaceState( null, null, window.location.href );

				}

			</script>';

			echo '<div class="alert alert-success">El Producto ha sido registrado</div>';
		
		}

		?>
		
		<button type="submit" class="btn btn-primary">Enviar</button>

	</form>

</div>