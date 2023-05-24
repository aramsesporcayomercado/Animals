<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

include("db.php");

$consulta="SELECT * FROM login where usuario='$usuario' and contraseña='$contraseña' and estatus = '1'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){
    header("location:administrador/index.php");
}else
if ($filas['id_cargo']==2) {
  header("location:clientes/index.php");
}
if ($filas['id_cargo']==3) {
  header("location:instructores/index.php");
}
if ($filas['id_cargo']==4) {
  header("location:usuarios/index.php");
}
else{
    ?>
    <?php
    include("login.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
