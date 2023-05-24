<?php
session_start();
if ($_SESSION['usuario']) {
	session_destroy();
	echo "<script>location.href='../login.html'</script>";
  }else{
  	echo "<script>location.href='../login.html'</script>";
  }

?>
