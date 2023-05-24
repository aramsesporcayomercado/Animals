<?php

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$num_serie=$_POST['num_serie'];
$imagen=$_POST['imagen'];
$estado=$_POST['estado'];
require("conexion.php");
$inserta = $mysqli->query("INSERT INTO inventario VALUES('$id','$nombre','$num_serie','$imagen','$estado')");
if($inserta){

	echo '<script>alert("Máquina guardado")</script> ';
	echo "<script>location.href='data2_table.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al guardar!")</script> ';
		echo "<script>location.href='data2_table.php'</script>";
	}
?>