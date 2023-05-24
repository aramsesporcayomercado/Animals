<?php

include("conexion.php");
include("funciones.php");

if ($_POST["operacion"] == "Crear") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }
    $stmt = $conexion->prepare("INSERT INTO rutinas(titulo, descripcion, consejos, imagen)VALUES(:titulo, :descripcion, :consejos, imagen)");

    $resultado = $stmt->execute(
        array(
            ':titulo'    => $_POST["titulo"],
            ':descripcion'    => $_POST["descripcion"],
            ':consejos'    => $_POST["consejos"],
            ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) {
        echo 'Rutina creado';
    }
}


if ($_POST["operacion"] == "Editar") {
    $imagen = '';
    if ($_FILES["imagen_usuario"]["name"] != '') {
        $imagen = subir_imagen();
    }else{
        $imagen = $_POST["imagen_usuario_oculta"];
    }


    $stmt = $conexion->prepare("UPDATE rutinas SET titulo=:titulo, descripcion=:descripcion, consejos=:consejos, imagen=:imagen  WHERE id = :id");

    $resultado = $stmt->execute(
        array(
            ':titulo'    => $_POST["titulo"],
            ':descripcion'    => $_POST["descripcion"],
            ':consejos'    => $_POST[" consejos"],
            ':imagen'    => $imagen
        )
    );

    if (!empty($resultado)) {
        echo 'rutina actualizado';
    }
}