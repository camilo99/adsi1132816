<?php 
	session_start();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> sesiones</title>
</head>
<body>
	<h1> sesiones</h1>
	<hr>
	<form action="" method="GET">
	<input type="submit" value="cerrar sesion" name="cancelar">
	</form>

	<?php 

	if (isset($_SESSION['visitas'])) {
		$_SESSION['visitas']++;
	} else {;
		$_SESSION['visitas'] = 0;
		

	}

	echo "vAmOs A eScRiBiR fEo Xd: ".$_SESSION['visitas'];

		if (isset($_GET['cancelar'])){
		session_unset();

		}



	 ?>
	
</body>
</html>