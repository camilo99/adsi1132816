<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> enviar correo electronico </title>
</head>
<body>
	<h1> enviar correo electronico </h1>
	<hr>

	<form action="" method="POST">
		<strong> correo </strong><input type="text" name="email">
		<strong> asunto </strong><input type="text" name="asunto">
		<strong> mensaje </strong><textarea name="mensaje"></textarea>
		<input type="submit" value="enviar">
	</form>


	<?php 
		if ($_POST) {
			$email = $_POST['email'];
			$asunto = $_POST['asunto'];
			$mensaje = $_POST['mensaje'];

			mail("jcmojica6@misena.edu.co", "Asunto: $asunto", $mensaje, "de: $email"); 
			echo "buena la rata";
		}


	 ?>
</body>
</html>