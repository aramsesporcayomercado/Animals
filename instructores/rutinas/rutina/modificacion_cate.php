<?php
require("conexion.php");


$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];
$consejos=$_POST['consejos'];

$modi =$mysqli->query("UPDATE rutinas SET titulo = '$titulo', descripcion= '$descripcion', consejos='$consejos' WHERE id = '$id'");
if($modi){

	echo '<script>alert("rutinas fue actualizada")</script> ';
	echo "<script>location.href='data2_table.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al actualizar!")</script> ';
		echo "<script>location.href='data2_table.php'</script>";
	}

?>