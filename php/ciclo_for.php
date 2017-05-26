<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> 3er Ejercicio 02/03/2017 </title>
</head>
<body>
	<h1> 3er Ejercicio 02/03/2017 </h1>
	<hr>

	<?php 
		// Imprimir 100 colores desde rojo hasta negro.

		for ($i=255; $i >= 0; $i -= 2) { 
			echo "<div style='background-color: rgb(".$i.", 0, 0); width: 100%; height: 20px';></div>";		}

		


	 ?>
</body>
</html>