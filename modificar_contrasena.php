<?php

$email = $_POST['email'];

require("conexion.php");

$busca = $mysqli->query("SELECT * FROM usuarios WHERE email = '$email'");

if($dato = $busca->fetch_array()){
	$nombre = $dato['nombre'];
	//$email = $dato['email'];
	$password = $dato['password'];

	$subject = "Recupera Contraseña";
	$carta = "Hola $nombre, tu solicitud fue atendida. \n";
	
	$carta .= "Tu contraseña es: $password \n";
	$carta .= "Tu correo es: $email \n";
	$carta .= "Que tengas un buen dìa";

	mail($email, $subject, $carta);

	echo'<script>alert("Correo enviado")</script>';
	echo "<script>location.href='login.html'</script>";


}else{
	echo'<script>alert("Su correo no esta registrado")</script>';
	echo "<script>location.href='modifica_contrasena.php'</script>";
}

?>