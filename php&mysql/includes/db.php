<?php 
	$con = mysqli_connect("localhost", "root", "", "ofac_mission");

	if (mysqli_connect_errno($con)) {
		echo "<div class='alert alert-danger'> error al conectar la base de datos".mysqli_connect_error()."</div>";
	}

 ?>