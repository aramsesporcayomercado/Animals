<?php
require("conexion.php");


$id=$_POST['id'];
$titulo=$_POST['titulo'];
$descripcion=$_POST['descripcion'];

$modi =$mysqli->query("UPDATE anuncios SET titulo = '$titulo', descripcion= '$descripcion' WHERE id = '$id'");
if($modi){

	echo '<script>alert("el anuncio fue actualizada")</script> ';
	echo "<script>location.href='data2_table.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al actualizar!")</script> ';
		echo "<script>location.href='data2_table.php'</script>";
	}

?>