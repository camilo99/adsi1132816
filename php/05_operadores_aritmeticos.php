<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> operadores </title>

	<style>
		body {
			font-family: cursive;
		}
		table {
			border-collapse: collapse;

		}
		table td, table th {
			background-color: #ddd;
			padding:10px;
			border: 1px solid grey;
			color: #666;
		}
		table th {
			background-color: #999;
			color:#fff;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1> operadores </h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>Descripcion</th>
			<th> Ejemplos </th>
			<th> Resultados </th>
		</tr>
		<tr>
			<?php 
				$x = 2;
				$suma = $x + 2;
			 ?>
			<td>+</td>
			<td>Adicion</td>
			<td> x = 2; x + 2   </td>
			<td> <?=$suma?> </td>
		</tr>
		<tr>
			<?php
				$resta = 5 - $x;
			 ?>
			<td>  - </td>
			<td> Substraccion </td>
			<td> x = 2; 5 - x  </td>
			<td><?= $resta ?></td>
		</tr>
		<tr>
			<?php 
			$x = 4;
			$multiplicacion = $x * 5; ?>
			<td> * </td>
			<td> multiplicacion </td>
			<td>x = 4; x * 5 </td>
			<td><?= $multiplicacion ?></td>
		</tr>
		<tr>
			<?php 
			$x = 50;
			$division = $x / 5; 
			 ?>
			<td> / </td>
			<td> Division </td>
			<td> x = 50; x / 5 </td>
			<td><?= $division ?></td>
		</tr>
		<tr>
			<?php 
				$x = 5;
				$modulo = $x % 2;
			 ?>
			<td> % </td>
			<td> Modulo </td>
			<td> x= 5; x % 2</td>
			<td> <?= $modulo?></td>
		</tr>
		<tr>
		<?php 
		$incremento = $x++; ?>
			<td> ++ </td>
			<td> Incremento </td>
			<td> x = 5; x++</td>
			<td><?=$incremento?></td>
		</tr>
		<tr>
			<?php 
			$x = 5;
			$Decremento = --$x ?>
			<td> -- </td>
			<td> Decremento </td>
			<td> x = 6 ; --x</td>
			<td><?= $Decremento?></td>
		</tr>
	</table>
</body>
</html>