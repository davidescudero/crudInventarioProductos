<?php

$productos = ControladorFormularios::ctrSeleccionarRegistros(null, null);


?>


<table class="table table-striped">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre Producto</th>
			<th>Referencia</th>
			<th>Precio</th>
			<th>Peso</th>
			<th>Categoria</th>
			<th>Stock</th>
			<th>Fecha Ultima Venta</th>
			<th>Fecha Creacion</th>
		</tr>
	</thead>

	<tbody>

	<?php foreach ($productos as $key => $value): ?>

		<tr>
			<td><?php echo ($key+1); ?></td>
			<td><?php echo $value["nombre"]; ?></td>
			<td><?php echo $value["referencia"]; ?></td>
			<td><?php echo $value["precio"]; ?></td>
			<td><?php echo $value["peso"]; ?></td>
			<td><?php echo $value["categoria"]; ?></td>
			<td><?php echo $value["stock"]; ?></td>
			<td><?php echo $value["fecha_ultima_venta"]; ?></td>
			<td><?php echo $value["fecha_creacion"]; ?></td>
			<td>

			<div class="btn-group">

				<div class="px-1">
				
				<a href="index.php?pagina=editar&id=<?php echo $value["id"]; ?>" class="btn btn-warning"><i class="fas fa-pencil-alt"></i></a>

				</div>

				<form method="post">

					<input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminarProducto">
					
					<button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>

					<?php

						$eliminar = new ControladorFormularios();
						$eliminar -> ctrEliminarRegistro();

					?>

				</form>			

			</div>
				

			</td>
		</tr>
		
	<?php endforeach ?>	
	
	</tbody>
</table>