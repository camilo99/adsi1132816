<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>else if</title>
</head>
<body>
	<h1> else if </h1>
	<hr>

	<?php 
	$ndia = date('w');

	if($ndia == 1) {
		echo "hoy es lunes";
	}

	else if($ndia == 2) {
		echo " hoy es martes";
	}
	else if($ndia == 3) {
		echo " hoy es miercoles";
	}
	else if($ndia == 4) {
		echo " hoy es jueves";
	}
	else if($ndia == 5) {
		echo " hoy es viernes";
	}
	 else {
		echo "good week puto";
	}

	 ?>
</body>
</html>