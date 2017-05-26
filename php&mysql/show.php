
<?php session_start(); ?>
<php include "includes/db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> CRUD - PHP & MYSQL</title>
	<link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/css/custom.css">
</head>
<body>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center"> CONSULTAR AVATAR AVATAR </h1>
			<hr>
			<ol class="breadcrumb">
				<li><a href="index.php"> Inicio </a>
				<li class="active"> consultar avatar </li>
			</ol>

			<?php if(isset($_GET['id'])): ?>
				<?php
					include 'includes/db.php';
					$id   = $_GET['id'];
					$sql  = "SELECT * FROM avatars WHERE id=$id";
					$rs   = mysqli_query($con, $sql);
					while ($row = mysqli_fetch_array($rs)) {
					
			    ?>

			<div class="panel panel-default">			 
			<div class="panel-heading">
			 	<h3 class="panel title text-center"><?=$row['name']?></h3>
			 </div>
			 <div class="panel-body">
			 	<table class="table text-center">
			 		<tr>
			 			<td><img src="<?=$row['image']?>"></td>
			 		</tr>
			 		<tr>
			 			<td><?=$row['color']?></td>
			 		</tr>
			 		<tr>
			 			<td><?=$row['gender']?></td>
			 		</tr>
			 			<td style="background-color:<?=$row['color']?>;
			 			color: #fff; 
			 			"></td>
			 	</table>
			 </div>
		</div>



			
			<?php 
		}
				
				mysqli_close($con);

			?>
		<?php endif ?>
			
	

	<script src="public/js/jquery-3.1.1.js"></script>

	<script>
		
	/* - - - - - - - - - - -- -  - */
	</script>
	
		

</body>
</html>