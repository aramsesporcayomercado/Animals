<?php
// aqui voy a poner el registro pero la validacion de registro para que se guarde en la base de datos

$id=$_POST['id'];
$qr=$_POST['qr'];

require("conexion.php");
$inserta = $mysqli->query("INSERT INTO QR VALUES('$id','$qr')");
if($inserta){

	echo '<script>alert("Bienvenido cliente")</script> ';
	echo "<script>location.href='clientes/index.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al registrar!")</script> ';
		echo "<script>location.href='login.html'</script>";
	}
?>
