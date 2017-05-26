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
			<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center"> ADICIONAR AVATAR </h1>
			<hr>
			<ol class="breadcrumb">
				<li><a href="index.php"> Inicio </a>
				<li class="active"> adicionar avatar </li>
			</ol>
			<form action="" id="add" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input  type="text" 
						    name="name"
							placeholder="Nombre"
							class="form-control" data-validation="required">
				</div>
				<div class="form-group">
					<select name="gender" class="form-control" data-validation="required">
						<option value=""> Genero... </option>
						<option value="Masculino"> Masculino </option>
						<option value="Femenino"> Femenino </option>
					</select>
				</div>
				<div class="form-group">
					<img id="avatar" src="imgs/generico.png">
					<button type="button" class="btn btn-default btn-upload">
					<i class="glyphicon glyphicon-user"></i> 
					Cargar Foto
					</button>
					
					<input style="display:none;" type="file" name="image" id="upload" accept="image/*">
				</div>
				<div class="form-group">
					<input type="color" name="color" class="form-control" data-validation="required">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success">Enviar</button>
					<button type="reset" class="btn btn-default">
						<i class="glyphicon glyphicon-trash"></i>
						Limpiar
					</button>
					<br>
				</div>

			</form>
			
			<?php 
				include 'includes/db.php';
				if ($_FILES) {

					$path      = $_FILES['image']['name'];
					$extension = pathinfo($path, PATHINFO_EXTENSION);
					$nimage    = time();
					$name      = $_POST['name'];
					$gender    = $_POST['gender'];
					$image    ='imgs/avatars/'.$nimage. '.' .$extension;
					$color     = $_POST['color'];
					if(!empty($_FILES['image']['tmp_name'])) {

					move_uploaded_file($_FILES['image']['tmp_name'] , $image);
					$sql = "INSERT INTO avatars VALUES (DEFAULT, '$name', '$gender', '$image', '$color')";

				} else {
					$sql = "INSERT INTO avatars VALUES (DEFAULT, '$name', '$gender', DEFAULT, '$color')";
				}

					if (mysqli_query($con , $sql)) {
						$_SESSION['action'] = 'Add';
						echo "<script> window.location.replace('index.php');</script>";
					}
				}
				mysqli_close($con);
			 ?>
			</div>
		</div>

	</div>

	<script src="public/js/jquery-3.1.1.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	<script src="public/js/jquery.form-validator.min.js"></script>
	<script src="public/js/jquery.form_validator.es.js"></script>

	<script>
		$(document).ready(function(){
			$('#upload').hide();
			$('.btn-upload').click(function(){
				$('#upload').click();
			});
		
		$.validate({
			form: '#add',
			language: es
		});

		$('#upload').change(function(event){
			previewAvatar();
		});
	});

	/* - - - - - - - - - - -- -  - */

	function previewAvatar() {
		var fr = new FileReader();
		fr.readAsDataURL(document.getElementById("upload").files[0]);
		fr.onload = function (ofREvent) {
			document.getElementById("avatar").src = ofREvent.target.result;
		}
	}
	</script>
	
		

</body>
</html>