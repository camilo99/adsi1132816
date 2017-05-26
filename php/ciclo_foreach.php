<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> 4to Ejercicio 02/03/2017 </title>
</head>
<body>
	<h1> 4to Ejercicio 02/03/2017 </h1>
	<hr>

	<?php 
		$lenguajes = array('Javascript', 'phyton', 'ruby', 'C#', 'Java');

		foreach ($lenguajes as $key => $value) {
			echo "<li>".$value."</li>";
		}

		


	 ?>