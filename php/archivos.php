<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Manejo de archivos con PHP </title>
</head>
<body>
	<h1> Manejo de archivos con PHP </h1>
	<hr>

	<?php
     	$archivo = fopen('lorem.txt', 'r') or exit('No se encontro el archivo');

     	while (!feof($archivo)) {
     		echo fgets($archivo)."<br>";
     	}

     	echo "<br><hr><br>";
     	$archivo2 = fopen('lorem.txt', 'r') or exit('No se encontro el archivo');


     	while (!feof($archivo2)) {
     		echo fgetc($archivo2)."-";
     	}

     	fclose($archivo);
	?>
</body>
</html>