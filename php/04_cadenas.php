<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Cadenas php </title>
</head>
<body>
	<h1> Cadenas php </h1>
	<hr>

	<?php 
		$cadena = 'ADSI 1132916';
		$cadena2 = "HOLA $cadena";


		$cadena3 = 'centro de procesos industriales';
		$cadena4 = 'SENA regional caldas';
		$cadenar1 = $cadena3.' '.$cadena4;
	 ?>

	 <h1><?=$cadena2?></h1>

	 <hr>

	 <h2>&nbsp la cadena:<?=$cadenar1?>tiene &nbsp <?= strlen($cadenar1);?> Caracteres</h2>
	 <h2>&nbsp la palabra procesos en la cadena<?=$cadenar1?> Esta en la posicion  &nbsp <?= strpos($cadenar1, 'procesos');?></h2>
	
</body>
</html>