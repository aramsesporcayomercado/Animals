<?php
   

$mysqli=new mysqli("localhost","root","","animals");
    $mysqli->set_charset("utf8");
   if($mysqli->connect_errno)
   {
       echo "Algo salio mal al conectar con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_error;
   }
// Desbloquera este cuando lo suba a file zilla//
  /*  $mysqli=new mysqli("localhost","u957329526_arath","Animals23","u957329526_animals");
    $mysqli->set_charset("utf8");
   if($mysqli->connect_errno)
     {
     echo "Algo salio mal al conectar con la base de datos:(".$mysqli->connect_errno.")".$mysqli->connect_error;
     }*/

?>