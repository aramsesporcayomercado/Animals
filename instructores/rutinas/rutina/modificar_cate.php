<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar registro</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<h1 style="text-align: center;">Modificar registro</h1>
<div class="container">
<form name="Modifica" method="POST" action="modificacion_cate.php">
<?php
$id = $_GET['id'];
require("conexion.php");
$modi = $mysqli->query("SELECT * FROM rutinas WHERE id = '$id'");

while ($row = mysqli_fetch_array($modi)) {

?>

id: <input type="text" name="id" value="<?php echo $row[0]?>" placeholder="porfavor ingresa el id" readonly><p></p>
<!--poner en nomcate un select para que te paresca los nombres de las categorias -->
titulo:<input type="text" name="titulo" value="<?php echo $row[1]?>" placeholder="porfavor ingresa el titulo"><p></p>
descripcion:<input type="text" name="descripcion" value="<?php echo $row[2]?>"  placeholder="Ingresa la descripcion porfavor"><p></p>
consejos:<input type="text" name="consejos" value="<?php echo $row[3]?>"  placeholder="Ingresa la consejos porfavor"><p></p>

<?php } ?>

<button class="btn btn-primary" type="submit" >Ingresar </button>
</form>
</div>