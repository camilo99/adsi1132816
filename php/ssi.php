<?php 

	include 'anadido/header.inc';
	require 'anadido/menu.inc';

	if ($_GET) {
		# code...
		$url = $_GET['url'];
		include 'anadido/'.$url.".php";
	} else {
		include 'anadido/home.php';
	}

	include 'anadido/footer.inc';

 ?>