<!DOCTYPE html>
<html>
<head>
	<title>Ingresar</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<meta name="viewport" content="width=device-width, inicial-escale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="bootstrap/js/nps.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="jumbotron boxlogin">
		<form method="POST" name="flogin" id="flogin" action="ingresar.php">
			<center><h2>Inicie sesion</h2></center>
			<label>Usuario</label>
			<input type="text" name="usermane" id="username" class="form-control">
			<label>Contraseña</label>
			<input type="text" name="password" id="password" class="form-control">
			<input type="submit" class="btn btn-success" value="conectarse">
		</form>
	</div>

</body>
</html>
