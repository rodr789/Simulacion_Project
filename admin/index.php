<?php
session_start();
if ($_SESSION) {
	header("location: admin-area.php");
}
if ($_GET) {
$cerrar_sesion = $_GET['cerrar_sesion'];
	if ($cerrar_sesion) {
		session_destroy();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Sesión</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
	<div class="container">
		<div class="login-form">
			<div class="form-header">
				<i class="fa fa-user"></i>
			</div>
			<form class="form-signin" role="form" id="login-admin" name="login-admin" method="post" action="login-admin.php">
			    <label for="email">Usuario</label>
				<input name="usuario_admin" " type="text" class="form-control" placeholder="Correo electrónico" autofocus>
				<label for="password">Contraseña</label>
				<input name="password_admin"  type="password" class="form-control" placeholder="Contraseña">
				<input type="hidden" name="login-admin" value="1">
				<button class="btn btn-block bt-login" type="submit" id="submit_btn">Iniciar Sesión</button>
			</form>
			<div class="form-footer">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<i class="fa fa-lock"></i>
						<a href="recuperar-pass.php">Olvidó su contraseña? </a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
	<script src="js/admin-ajax.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<script src="js/login-ajax.js"></script>
  </body>
</html>
