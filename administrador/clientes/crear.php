<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }
    $stmt = $conexion->prepare("INSERT INTO clientes(nombre, apellidos,tipo_membresia ,imagen, telefono, email,qr,estatus)VALUES(:nombre, :apellidos,:tipo_membresia, :imagen, :telefono, :email,:qr ,:estatus)");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':tipo_membresia'    => $_POST["tipo_membresia"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':qr'       => $_POST["qr"],
            ':estatus'    => $_POST["estatus"],
            ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) {
        echo 'Registro creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE clientes SET nombre=:nombre, apellidos=:apellidos,tipo_membresia=:tipo_membresia ,imagen=:imagen, telefono=:telefono, email=:email,qr=:qr ,estatus=:estatus WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':nombre'    => $_POST["nombre"],
            ':apellidos'    => $_POST["apellidos"],
            ':tipo_membresia'    => $_POST["tipo_membresia"],
            ':telefono'    => $_POST["telefono"],
            ':email'    => $_POST["email"],
            ':qr'    => $_POST["qr"],
            ':estatus'    => $_POST["estatus"],
            ':imagen'    => $imagen,
            ':id'    => $_POST["id_usuario"]
        )
    );

    if (!empty($resultado)) {
        echo 'Cliente actualizado';
    }
}