<?php

$id=$_POST['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$consejos=$_POST['consejos'];
require("conexion.php");
$inserta = $mysqli->query("INSERT INTO rutinas VALUES('$id','$titulo','$descripcion', '$consejos')");
if($inserta){

	echo '<script>alert("rutina guardada")</script> ';
	echo "<script>location.href='data2_table.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al guardar!")</script> ';
		echo "<script>location.href='data2_table.php'</script>";
	}
?>