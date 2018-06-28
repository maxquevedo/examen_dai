<?php
	session_start();
  require '../DB/conexion_bd.php';
	$codigoRandomCliente = rand();
	$rutCliente = $_SESSION['rutParticular'];
	$sql = "INSERT INTO ANALISISMUESTRAS VALUES ('','','','','','$codigoRandomCliente','','$rutCliente')";
	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha registrado la muestra correctamente');</script>";
		echo "<script>window.location.href='index.php'</script>";
	}else{
		echo "Algo ha salido mal :(";
	}
?>
