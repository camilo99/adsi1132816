<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> formularios php </title>
</head>
<body>
	<h1> formularios php </h1>
	<hr>
	<form action="" method="GET">
		<fieldset>
			<legend><h2> datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="nombre completo" value="<?php if(isset($_GET['nombre'])) echo $_GET['nombre']; ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="correo electronico" value="<?php if(isset($_GET['email'])) echo $_GET['email']; ?>">
			</div>
			<div>
				<input type="number" name="telefono" placeholder="telefono" value="<?php if(isset($_GET['telefono'])) echo $_GET['nombre']; ?>">
			</div>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
		</form>
		<hr>
		<ul>
			
		
	

		<?php 

		if ($_GET):
			$errores = 0;

			foreach ($_GET as $key => $value) {
				if (!$value) 
					$errores++;
				}
				if ($errores == 0) 
			{
				
			
		// var_dump($_GET);
			$nombre = $_GET['nombre'];
			$email = $_GET['email'];
			$telefono = $_GET['telefono'];

			echo "<li> nombre: ".$nombre."</li>";
			echo "<li> email: ".$email."</li>";
			echo "<li> telefono: ".$telefono."</li>";
		} else {
			echo "<li> debe llenar todoss los campos! </li>";
		}





		endif;

		
		
		
	 ?>
	 </ul>
			