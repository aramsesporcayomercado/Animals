<?php


$mysqli =new mysqli("localhost","root","","animals");

if($mysqli->connect_errno)
{
	echo"Algo salio mal con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_errno;
}

//Desbloquear este cuando lo suba a file zilla
/*$conexion=mysqli_connect("localhost","u957329526_arath","A7nimals27","u957329526_animals")or die(
    "error de conexion");*/
	?>