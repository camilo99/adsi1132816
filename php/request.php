<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> formularios php </title>
</head>
<body>
	<h1> formularios php </h1>
	<hr>
	<form action="" method="post">
		<fieldset>
			<legend><h2> datos personales</h2></legend>
			<div>
				<input type="text" name="nombre" placeholder="nombre completo" value="<?php if(isset($_REQUEST['nombre'])) echo $_REQUEST['nombre']; ?>">
			</div>
			<div>
				<input type="email" name="email" placeholder="correo electronico" value="<?php if(isset($_REQUEST['email'])) echo $_REQUEST['email']; ?>">
			</div>
			<div>
				<input type="number" name="telefono" placeholder="telefono" value="<?php if(isset($_REQUEST['telefono'])) echo $_REQUEST['nombre']; ?>">
			</div>
			<div>
				<input type="submit" value="enviar">
			</div>
		</fieldset>
		</form>
		<hr>
		<ul>
			
		
	

		<?php 

		if ($_POST):
			$errores = 0;

			foreach ($_POST as $key => $value) {
				if (!$value) 
					$errores++;
				}
				if ($errores == 0) 
			{
				
			
		// var_dump($_REQUEST);
			$nombre = $_REQUEST['nombre'];
			$email = $_REQUEST['email'];
			$telefono = $_REQUEST['telefono'];

			echo "<li> nombre: ".$nombre."</li>";
			echo "<li> email: ".$email."</li>";
			echo "<li> telefono: ".$telefono."</li>";
		} else {
			echo "<li> debe llenar todoss los campos! </li>";
		}





		endif;

		
		
		
	 ?>
	 </ul>
			