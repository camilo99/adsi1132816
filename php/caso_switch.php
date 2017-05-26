<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>siwtch</title>
</head>
<body>
	<h1> siwtch </h1>
	<hr>

	<?php 
	$ndia = date('w');

	switch ($ndia) {
		case '1':
			echo "Hoy es lunes";
			break;
		case '2':
			echo " martes";
			break;
		case '3':
			echo "Hoy es miercoles";
			break;	
		case '4':
			echo "jueves";
			break;
		case '5':
			echo "Hoy es vienes, marihuana pa todos";
			break;		
		
		default:
			echo "a fumar como locos xd";
			break;
	}

	

	 ?>
</body>
</html>