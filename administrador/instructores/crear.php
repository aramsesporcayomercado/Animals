<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }
    $stmt = $conexion->prepare("INSERT INTO instructores(nombre, apellidos, imagen, telefono, email, clave, entrada, salida, estado)VALUES(:nombre, :apellidos, :imagen, :telefono, :email, :clave, :entrada, :salida, :estado)");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':imagen'    => $imagen,
            ':clave'    => $_POST["clave"],
            ':entrada'    => $_POST["entrada"],
            ':salida'    => $_POST["salida"],
            ':estado'    => $_POST["estado"]
        )
    );

    if (!empty($resultado)) {
        echo 'Instructor creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE instructores SET nombre=:nombre, apellidos=:apellidos, imagen=:imagen, telefono=:telefono, email=:email, clave=:clave, entrada=:entrada, salida=:salida, estado=:estado WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"],
            ':clave'    => $_POST["clave"],
            ':entrada'    => $_POST["entrada"],
            ':salida'    => $_POST["salida"],
            ':estado'    => $_POST["estado"]
        )
    );

    if (!empty($resultado)) {
        echo 'instructor actualizado';
    }
}