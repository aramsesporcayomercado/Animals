<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar registro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<h1 style="text-align: center;">Modificar registro</h1>
<div class="container">
<form name="Modifica" method="POST" action="modificacion_anuncio.php">
<?php
$id = $_GET['id'];
require("conexion.php");
$modi = $mysqli->query("SELECT * FROM inventario WHERE id = '$id'");

while ($row = mysqli_fetch_array($modi)) {

?>


<!--poner en nomcate un select para que te paresca los nombres de las categorias -->
<label for="nombre">Ingrese el nombre</label>
                    <input type="text" name="nombre" id="nombre"  value="<?php echo $row[1]?>" class="form-control" placeholder="Ingresa el titulo de tu nombre">
                    <br />

<label for="estado">Ingrese el estado</label>
                <select name="estado" id="estado" value="<?php echo $row[4]?>" class="form-control" required>
            <?php
        $estado =$row[4];

        if ($estado == "1"){ ?>
	        <option value="<?php echo $row[4] ?>">ACTIVO</option>
<?php }else{ ?>
            <option value="<?php echo $row[4] ?>">INACTIVO</option>
<?php  }    ?>

<option>--------------------</option>
<option value="1">Activo </option>
<option value="0">Inactivo </option>
</select>
<br>
<?php } ?>

<button class="btn btn-primary" type="submit" >Ingresar </button>
</form>
</div>