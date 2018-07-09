<?php
	session_start();
	require '../DB/conexion_bd.php';
	$rut = $_POST['rutDeshabilitaParticular'];
	$sql = "UPDATE PARTICULAR set estadoParticular ='Deshabilitado' WHERE rutParticular='$rut' ";

	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha deshabilitado correctamente el particular');</script>";
		echo "<script>window.location.href='../Views/index.php'</script>";
	}
		?>
