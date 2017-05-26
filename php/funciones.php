<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> 5to Ejercicio 02/03/2017 </title>
</head>
<body>
	<h1> 5to Ejercicio 02/03/2017 </h1>
	<hr>

	<?php 
		
		// Funcion sin parametros:

		function mostrar() {
			echo "<h2> Hola putos </h2>";
		} mostrar();

		// funciones con parametros: 
		function bienvenido($nombre, $titulacion) {
			echo "Bienvenido BOSS: ".$nombre;
			echo "<br>";
			echo "jefe en : ".$titulacion;

		}
		bienvenido('Camilo Mojica', 'xd');

		// funcion retorna valor
		function tiempoformacion($tiempo){
			return $tiempo." Meses";

		}
		echo "su tiempo de formacion es: ".$tiempoformacion(6);

		// funcion con parametros opcionales

		function centroformacion($centro, $regional = 'caldas') {
			return "centro de formacion: ".$centro."<br> regional : ".$regional;
		}


	 ?>