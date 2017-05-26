<?php 

	if ($_POST) {
		# code...
	
	setcookie('nombre', $_POST['name'], time()+120);
	setcookie('objeto', $_POST['object'], time()+120);

	// Eliminar cookie 
	// 

}


 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>cookies </title>
 </head>
 <body>
 	<h1>cookies </h1>
 	<hr>

 	<?php 
 	if (isset($_COOKIE['name'])) {
		echo "<h3> Bienvenido: ".$_COOKIE['name']."</h3>";
		 	}

 	 ?>
 	<form action="" method="POST">
 		<input type="text" name="name">
 		<input type="text" name="object">
 		<input type="submit" value="enviar">
 	</form>
 </body>
 </html>