<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lista de Usuarios desde la BD (MVC)</title>
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/animate.css">
	<style>
			body, html{
				background-color: #333;
				height: 100%;
			}
			a.btn.btn-success:hover{
				background-color: #70F690;
			}
			
	</style>

</head>
<body>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1 animated bounceInUp">
				<h1 class="text-center">USUARIOS DE LA MVC</h1>
					<hr>
					<h3 class="lead">Datos de Usuario(BD)</h3>
					<a class="btn btn-success" href="?q=add">Agregar<i class="glyphicon glyphicon-plus"></i></a>
					
					<table class="table table-stripped table-hover">
						<thead>
							<tr>
								<th>Documento</th>
								<th>Nombre</th>
								<th>Telefono</th>
								<th>Direccion</th>
								<th>Ciudad</th>
								<th>Correo</th>
								<th>Acciones</th>

							</tr>
						</thead>
						<tbody>
							<?php foreach ($data as $d): ?>
								<tr>
									
									<td class="document"><?php echo $d ['documento']; ?></td>
									<td class="nombre"><?php echo $d ['nombres']; ?></td>
									<td class="telefono"><?php echo $d ['telefono']; ?></td>
									<td class="direccion"><?php echo $d ['direccion']; ?></td>
									<td class="ciudad"><?php echo $d ['ciudad']; ?></td>
									<td class="correo"><?php echo $d ['correo']; ?></td>
							
									 <td>
	                					<a class="btn btn-warning" href="?q=edit&id=<?php echo $d['id']; ?>"><i class="glyphicon glyphicon-pencil"></i></a>
	                					<a class="btn btn-danger" href="?q=delete&id=<?php echo $d['id']; ?>"><i class="glyphicon glyphicon-trash"></i></a>


	         				     	</td>
								</tr>


							<?php endforeach ?>
						</tbody>
					</table>
					<a href="./" class="btn btn-info animated Shake"> <i class="glyphicon glyphicon-arrow-left" >Regresar</i></a>
					
						
			</div>
		</div>
	</div>

	<script src="public/js/jquery-3.1.1.js"></script>

	<script>
		$(document).ready(function() {
		$('.document').click(function(event) {
			alert ('Documento de la persona');
		});	
		$('.nombre').click(function(event) {
			alert ('Nombre de la persona');
		});	
		$('.telefono').click(function(event) {
			alert ('telefono de la persona');
		});	
		$('.direccion').click(function(event) {
			alert ('direccion de la persona');
		});	
		$('.ciudad').click(function(event) {
			alert ('ciudad de la persona');
		});	
		$('.correo').click(function(event) {
			alert ('Correo de la persona');
		});	

		});
	</script>
	
</body>
</html>