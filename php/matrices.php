<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> inicio dia 02/03/2017 </title>
</head>
<body>
	<h1> Matrices PHP </h1>
	<hr>


	<?php  
		// forma larga ( incorrecta )

	$vh  = 'Volkswagen';
	$vh1 = 'BMW';
	$vh2 = 'Mazda';
	$vh3 = 'Toyota';
	$vh4 = 'Cammaro';

		// La forma corta ( correcta ) - Incdices Automaticos

	$vehiculos = array  ('Volksvagen', 'BMW', 'Mazda', 'Toyota', 'Cammaro');

		// Indices Manuales

	$vehiculos[5] = 'Renault';
	$vehiculos[6] = 'Chevrolet';
	$vehiculos[7] = 'Ford';
	$vehiculos[8] = 'kia';

	echo "<h2> Numericos </h2>";
	var_dump($vehiculos);

	echo "<br><br>mi puto carro es: ".$vehiculos[4];


	// asociativos

	$referencias = array('volksvagen' => 'golf', 
						 'BMW' => 'Duster',
						  'Mazda' => 'traker',
						  'Toyota' => 'CX6',
						  'Cammaro' => 'Fusion');


	$referencias['Renault'] = 'Picanto';
	$referencias['Chevrolet'] = 'Palio';
	$referencias['Ford'] = 'Prado';
	$referencias['kia'] = '130';

	echo "<h2> Dimensionales </h2>"; 
	var_dump($referencias);

	echo "<br><br>mi puto carro es: ".$referencias['Ford'];




	// Multidimensionales

	$familias = array('Naruto' => array('Jiraiya', 'kakashi', 'boruto', 'minato'),
					  'Hinata' => array('neji', 'lee', 'gosas'),
					  'sasuke' => array('sakura', 'itachi', 'madara')
					  );

	echo "<h3>Multidimensionales: </h3>";
	var_dump($familias);

	echo "<br><br> el mas puto del anime es: ".$familias['sasuke'][2];


















	?>
</body>
</html>