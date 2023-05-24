<?php
//Desbloquear este cuando lo suba a file zilla//
 /*   $host = "localhost";
    $user = "u957329526_arath";
    $clave = "A7nimals27";
    $bd = "u957329526_animals";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");*/

   $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "animals";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_errno()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
    mysqli_select_db($conexion,$bd) or die("No se encuentra la base de datos");
    mysqli_set_charset($conexion,"utf8");
