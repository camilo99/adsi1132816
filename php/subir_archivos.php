<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Subir archivos al servidor </title>
</head>
<body>
	<h1> Subir archivos al servidor </h1>
	<hr>

	<form action="" method="post" enctype="multipart/form-data">
		<fieldset>
			<legend><h2>subir foto</h2></legend>
			<input type="file" name="foto" accept="image/*">
			<br>
			<input type="submit" value="subir foto">
		</fieldset>

	</form>


	<?php 
	if ($_FILES) {

	if ($_FILES['foto']['size'] < 1000000 && $_FILES['foto']['type'] == 'image/png') {
		
	
		if($_FILES['foto']['error'] > 0) {
		echo "error".$_FILES['foto']['error'];
	} else {
		echo "<li> NOMBRE: 				".$_FILES['foto']['name']."</li>";
		echo "<li> TIPO: 				".$_FILES['foto']['type']."</li>";
		echo "<li>TAMAÑO : 				".$_FILES['foto']['size'] / 1024 ." kb"."</li>";
		echo "<li> ALMACENADO TEMPORAL:  ".$_FILES['foto']['tmp_name']."</li>";

		if(file_exists('subir/'.$_FILES['foto']['name'])) {
			echo "el archivo : ".$_FILES['foto']['name']." ya existe";
		} else {
			move_uploaded_file($_FILES['foto']['tmp_name'], 'subir/'.$_FILES['foto']['name']);
			echo "el archivo se subio con exito";
		}
		}

	} else {
		echo "error: la imagen no es png o no cumple con el tamaño indicado";
	}
	}

	?>
</body>
</html>