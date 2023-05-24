<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1 style="text-align: center;"> Bienvenido a registro de instructores</h1>

    <div class="container">
		<form name="FORM1" method="POST" action="alta_instructor.php">
			Id:<input type="text" name="id" placeholder="Ingresa tu ID porfavor"><p></p>
			Titulo:<input type="text" name="titulo" placeholder="Ingresa tu titulo porfavor"><p></p>
			descripcion:<input type="text" name="descripcion" placeholder="Ingresa tu descripcion Paterno porfavor"><p></p>
			<button type="submit">GUARDAR</button>
		</form>
	</div>
</body>
</html>