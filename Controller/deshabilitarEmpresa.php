<?php
	session_start();
	require '../DB/conexion_bd.php';
	$rut = $_POST['rutDeshabilitaEmpresa'];
	$sql = "UPDATE EMPRESA set estadoEmpresa ='Deshabilitado' WHERE rutEmpresa='$rut' ";

	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha deshabilitado la empresa correctamente ');</script>";
		echo "<script>window.location.href='../Views/index.php'</script>";
	}
		?>
