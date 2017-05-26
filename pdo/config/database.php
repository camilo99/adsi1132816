
<?php 
		try {
			$con  = new PDO("mysql:host=$host;dbname:$ndb" , $user, $pass);
			$con->exec('set names utf8');

		} catch (PDOException $e) {
			echo $e->getMessage();
		}

	

	// echo "Se desconecto perro";

	function login($con, $correo, $clave){
		$sql = "SELECT * FROM usuarios WHERE correo = :correo AND clave = :clave LIMIT 1";
		$stm = $con->prepare($sql);
		$stm->bindparam(':correo', $correo);
		$stm->bindparam(':clave', $clave);
		$stm->execute();

		if ($stm->fetchColumn() > 0) {
			return true; 
		} else {
			return false;
		}
	}
 ?>