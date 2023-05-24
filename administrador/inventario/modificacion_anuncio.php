<?php
require("conexion.php");



$id=$_POST['id'];
$nombre=$_POST['nombre'];
$imagen=$_POST['imagen'];
$estado=$_POST['estado'];

$modi =$mysqli->query("UPDATE inventario SET nombre = '$nombre', imagen= '$imagen',estado='$estado' WHERE id = '$id'");
if($modi){

	echo '<script>alert("La máquina fue actualizada")</script> ';
	echo "<script>location.href='data2_table.php'</script>";

	}
	else{
		echo '<script>alert("Problemas al actualizar!")</script> ';
		echo "<script>location.href='data2_table.php'</script>";
	}

?>