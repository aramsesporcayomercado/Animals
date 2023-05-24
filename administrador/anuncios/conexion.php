<?php


/*$mysqli =new mysqli("localhost","u957329526_arath","A7nimals27","u957329526_animals");

if($mysqli->connect_errno)
{
	echo"Algo salio mal con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_errno;
}*/


$mysqli =new mysqli("localhost","root","","animals");

if($mysqli->connect_errno)
{
	echo"Algo salio mal con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_errno;
}