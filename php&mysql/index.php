<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> CRUD - PHP & MYSQL</title>
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/custom.css">
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
			<h1 class="text-center"> CRUD (PHP & MYSQL) </h1>
			<h4 class="text-center text-muted text-uppercase"> Avatar System </h4>
			<hr>
			<?php if (isset($_SESSION['action'])): ?>

			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<?php if ($_SESSION['action'] == 'Add'): ?>
						<strong>Aviso perro</strong> el avatar se registro.							
						<?php endif ?>
						<?php if ($_SESSION['action'] == 'edit'): ?>
						<strong>Aviso perro</strong> el avatar se modifico.
							
						<?php endif ?>
						<?php if ($_SESSION['action'] == 'delete'): ?>
						<strong>Aviso perro</strong> el avatar se elimino correctamente.
							
						<?php endif ?>
          		 	</div>
				</div>
			</div>
			<?php unset($_SESSION['action']); ?>
			<?php endif; ?>
			<a href="add.php" 
			class="btn btn-lg btn-success" 
			data-toogle="tooltip" data-placement="top"
			title="Adicionar avatar"> 
			<i class="glyphicon glyphicon-plus"></i>
			Avatar 

			</a>
			<?php 
				include 'includes/db.php';
			    $sql = "SELECT * FROM avatars";

				$rs = mysqli_query ($con, $sql);
			?>
			<div class="row">
				<?php while ($row = mysqli_fetch_array($rs)) { ?>
				<div class="col-md-4">
					<figure class="avatars" style="background-image: url(<?=$row['image']?>);">
						<figcaption><?= $row['name'] ?></figcaption>
						<nav>
							<a href="show.php?id=<?=$row['id']?>" 
							class=" btn btn-default" 
							data-toogle="tooltip" 
							data-placement="top"
							title="consultar avatar">
								<i class="glyphicon glyphicon-search"></i>
							</a>
							<a href="edit.php?id=<?=$row['id']?>" class=" btn btn-default" 
							data-toogle="tooltip" 
							data-placement="top"
							title="Editar avatar">
								<i class="glyphicon glyphicon-pencil"></i>
							</a>
							<button  class=" btn btn-danger btn-delete" 
							data-toogle="tooltip" 
							data-placement="top"
							data-id="<?=$row['id']?>"
							title="eliminar avatar">
								<i class="glyphicon glyphicon-trash"></i>
							</a>
						</nav>
					</figure>
				</div>

				<?php } ?>
			</div>

			</div>
		</div>

	</div>

	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			$('[data-toggle="tooltip"]').tooltip();

			/* --------------------------- */

			$('.btn-delete').click(function(event){
				if (confirm('realmente desea eliminar este avatar?')) {
					$id = $(this).attr('data-id');
					window.location.replace('delete.php?id=' +$id);
				}
			});
		});
	</script>
		

</body>
</html>