<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> operadores</title>
</head>
<body>
	<h1> operadores </h1>
	<hr>
	<table>
		<tr>
			<th>Operador</th>
			<th>EJemplo</th>
			<th> Es igual que </th>
			<th> Resultados </th>
		</tr>
		<tr>
			<?php 
				$y = 2;
				$x = $y;
			 ?>
			<td>= </td>
			<td>x = y</td>
			<td>x= y</td>
			<td> <?=$x?> </td>
		</tr>
		<tr>
			<?php
				$x += $y;
			 ?>
			<td>  += </td>
			<td> += y </td>
			<td> x = x + y  </td>
			<td><?= $x ?></td>
		</tr>
		<tr>
			<?php 
			
			$X = $y ?>
			<td> -= </td>
			<td> x -= y </td>
			<td>x = x - y </td>
			<td><?= $x ?></td>
		</tr>
		<tr>
			<?php 
			
			$x *= $y; 
			 ?>
			<td> *= </td>
			<td> x *= y </td>
			<td> x = x * y </td>
			<td><?= $x ?></td>
		</tr>
		<tr>
			<?php 
				$x *= $y;
				
			 ?>
			<td> *= </td>
			<td> x *= y </td>
			<td> x= x * y</td>
			<td> <?= $x?></td>
		</tr>
		<tr>
			<?php 
				$x /= $y;
				
			 ?>
			<td> /= </td>
			<td> x /= y </td>
			<td> x= x / y</td>
			<td> <?= $x?></td>
		</tr>
		<tr>
		<?php 
		$x .= $y ?>
			<td> .= </td>
			<td> x .= y </td>
			<td> x = x . y</td>
			<td><?=$x?></td>
		</tr>
		<tr>
			<?php 
			
			$x %= $y ?>
			<td> %= </td>
			<td> x %= y </td>
			<td> x = x % y</td>
			<td><?= $x?></td>
		</tr>
	</table>
</body>
</html>