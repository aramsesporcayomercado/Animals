<?php

$id = $_GET['id'];

require("conexion.php");

$modi = $mysqli->query("DELETE FROM rutinas WHERE id = '$id'");


if($modi){

	echo '<script>alert("rutinas eliminado")</script> ';
	echo "<script>location.href='data2_table.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al eliminar!")</script> ';
		echo "<script>location.href='data2_table.php'</script>";
	}

?>
