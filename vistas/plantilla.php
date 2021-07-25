<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ejemplo MVC</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>

</head>
<body>



	<div class="container-fluid">
		
		<h3 class="text-center py-3">INVENTARIO DE PRODUCTOS</h3>

	</div>

	<div class="container-fluid  bg-light">
		
		<div class="container">

			<ul class="nav nav-justified py-2 nav-pills">
			
			<?php if (isset($_GET["pagina"])): ?>

				<?php if ($_GET["pagina"] == "registro"): ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=registro">Crear Producto</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=registro">Crear Producto</a>
					</li>
					
				<?php endif ?>


				<?php if ($_GET["pagina"] == "inicio"): ?>

					<li class="nav-item">
						<a class="nav-link active" href="index.php?pagina=inicio">Leer datos</a>
					</li>

				<?php else: ?>

					<li class="nav-item">
						<a class="nav-link" href="index.php?pagina=inicio">Leer datos</a>
					</li>
					
				<?php endif ?>

		

			<?php else: ?>

				<li class="nav-item">
					<a class="nav-link active" href="index.php?pagina=registro">Crear Producto</a>
				</li>

			
				<li class="nav-item">
					<a class="nav-link" href="index.php?pagina=inicio">Leer Datos</a>
				</li>

				
				
			<?php endif ?>

			</ul>

		</div>

	</div>


	<div class="container-fluid">
		
		<div class="container py-5">

			<?php 

				if(isset($_GET["pagina"])){

					if(
					   $_GET["pagina"] == "registro" ||
					   $_GET["pagina"] == "ingreso" ||
					   $_GET["pagina"] == "inicio" ||
					   $_GET["pagina"] == "editar"){

						include "paginas/".$_GET["pagina"].".php";

					}else{

						include "paginas/error404.php";
					}


				}else{

					include "paginas/registro.php";

				}

				

			 ?>

		</div>

	</div>


	
</body>
</html>