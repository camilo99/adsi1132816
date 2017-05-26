<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> </title>
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/js/bootstrap.min.js">


	<style>
		body {
			background: url(fondo2.jpg);
		}
		form {
			text-align: center;
			margin-top: 20px;
			display: table-caption;
			position: relative;
			left: 600px;
		}
		input {
			padding: 15px;
			margin-top: 20px;
			border-radius: 5%;

		}
		select {
			padding: 15px;

		}
		h2 {
			text-align: center;
			color: black;
			font-family: cursive;
		}
	</style>
</head>
<body>
	<div class="">
		<form action="" method="post">
			<select name="operacion">
				<option value="seleccionar..."></option>
				<option value="suma"> suma </option>
				<option value="resta"> resta </option>
				<option value="multiplicacion"> multiplicacion </option>
				<option value="division"> division </option>
			</select>

			<input type="number" class="form-control" name="n1" placeholder="escribe un numero">
			<input type="number" class="form-control" name="n2" placeholder="escribe un numero">

			<input class="form-control" type="submit">
		</form>
	</div>



	<?php 
	if ($_POST) {

		$operacion = $_POST['operacion'];
		$n1 = $_POST['n1'];
		$n2 = $_POST['n2'];

		class Operaciones {
			protected $n1;
			protected $n2;
			protected $rs;

		public function __construct($n1, $n2){
			$this->n1 = $n1;
			$this->n2 = $n2;
		}
		public function getOperacion(){
			return $this->rs;
		}
		}
		if ($operacion == 'suma') {
			class Suma extends Operaciones {
			public function calcular(){
				return $this->rs = $this->n1 + $this->n2;
			}
		}
		$op = new Suma($n1, $n2);
		$op->calcular();
		echo "<h2>"." la Suma es: ".$op->getOperacion()."</h2>";
		}
		if ($operacion == 'resta') {
			class Resta extends Operaciones{
			public function calcular(){
				return $this->rs = $this->n1  - $this->n2;
			}
		}
		$op = new Resta($n1, $n2);
		$op->calcular();
		echo "<h2>"." la resta es: ".$op->getOperacion()."</h2>";
		}
		

		if ($operacion == 'multiplicacion') {
		 class Multiplicacion extends Operaciones{
			public function calcular(){
				return $this->rs = $this->n1  * $this->n2;
			}
		}
		$op = new Multiplicacion($n1, $n2);
		$op->calcular();
		echo "<h2>"." la Multiplicacion es: ".$op->getOperacion()."</h2>";
		}

		if ($operacion == 'division') {
			class Division extends Operaciones{
			public function calcular(){
				return $this->rs = $this->n1  / $this->n2;
			}
		}
		$op = new Division($n1, $n2);
		$op->calcular();
		echo "<h2>"." la Division es: ".$op->getOperacion()."</h2>";
		} 
		
		

		
		

	}
		




	 ?>
</body>
</html>