<?php
	session_start();
	require '../DB/conexion_bd.php';
	$rut = $_POST['rutDeshabilitaEmpleado'];
	$sql = "UPDATE EMPLEADO set estadoEmpleado ='Deshabilitado' WHERE rutEmpleado='$rut' ";

	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha deshabilitado el empleado correctamente ');</script>";
		echo "<script>window.location.href='../Views/index.php'</script>";
	}
		?>
