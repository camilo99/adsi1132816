
<?php 
require 'config/app.php';
require 'config/database.php';
include 'templates/header.inc';
include 'templates/navbar.inc';		
?>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1 class="text-center"> Sistema Ventas (PDO & MYSQL) </h1>
			<hr>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title"> Ingreso de usuarios</h3>
				</div>
			</div>

			<div class="panel-body">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">

				<?php 
				if ($_SERVER['REQUEST_METHOD']  == 'POST') {
					$correo = $_POST['correo'];
					$clave = md5($_POST['clave']);
				if (login($con, $correo, $clave)) {
					echo "datos correctos";
				} else {
					echo "datos incorrectos";
				}
					$con = null;
				}
			
			?>
					<form action="" method="post">
						<div class="form-group">
							<input  type="text" 
									class="form-control" 
									name="correo"
									placeholder="correo electronico">
						</div>
						<div class="form-group">
							<input  type="text" 
									class="form-control" 
									name="clave"
									placeholder="contraseña">
						</div>
						<div class="form-group">
							<input  type="submit" class="btn btn-success" value="ingresar">
						</div>
						
						</form>
				
				</div>
			</div>
			
			</div>

			
		
	</div>
</div>

<?php 
 include 'templates/footer.inc'

?>

