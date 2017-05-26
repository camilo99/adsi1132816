<?php 

	abstract class BaseDatos {
		protected $conx;
		protected $host;
		protected $user;
		protected $pass;
		protected $nmbd;

		public function __construct($host, $user, $pass, $nmbd){
			$this->host = $host;
			$this->user = $user;
			$this->pass = $pass;
			$this->nmbd = $nmbd;
		
	}

	public function conexion() {
		$this->conx = new mysqli($this->host, $this->user, $this->pass, $this->nmbd);
		if ($this->conx) {
			
		}
	}
	public function desconexion(){
		mysqli_close($this->conx);
		
	}
}

	/**
	* 
	*/
	class Usuario extends BaseDatos
	{
		
		public function __construct($host, $user, $pass, $nmbd)
		{
			parent:: __construct($host, $user, $pass, $nmbd);
			parent::conexion();

		}
		public function getUsuarios() {
			return $this->conx->query('SELECT * FROM usuarios');
			// $var = mysqli_query($this->conx, "SELECT * FROM usuarios");
		}
	}

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title> Consulta a BD (Programacion Orientada a objetos</title>
	</head>
	<body>
	<h1>usuarios</h1>
		<ul>
			<?php

			$user = new Usuario('localhost', 'root', '' ,'adsi1132816');
			$usuarios = $user->getUsuarios();

			?>

			 <?php foreach ($usuarios as  $usuario): ?>
					<li><?php echo $usuario['nombres'];?></li>
			<?php endforeach ?>

			<?php
			$user->desconexion();
			?>

			

		</ul>
	</body>
	</html>