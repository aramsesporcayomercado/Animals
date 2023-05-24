<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Recuperar contraseña</title>
	<link rel="icon" href="images/gym.png">
	<link rel="stylesheet" type="text/css" href="css/pass.css">

</head>
<body>
<div class="container">
<form action="modificar_contrasena.php" name="contrasena" method="POST" class="formulario">
	<!--pon el logo<img src="images/gym.png" style="width: 110px; height: 110px;">-->
	<h1>Ingresa tus Correo para Recuperar tu Contraseña</h1>
	<div class="input_contenedor">
		<input type="text" name="email" placeholder="Ingresa tu Email" required><p>
	</div>
	<div class="input_contenedor">
		<input type="submit" name="buscar" value="Enviar" class="button">
	</div>
</div>
</form>
</body>
</html>