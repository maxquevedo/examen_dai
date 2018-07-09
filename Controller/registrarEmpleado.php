<?php
	session_start();
  require '../DB/conexion_bd.php';
	$rutEmpleado= $_POST['rutEmpleado'];
	$nombreEmpleado= $_POST['nombreEmpleado'];
	$passwordEmpleado=$_POST['passwordEmpleado'];
	$emailEmpleado= $_POST['emailEmpleado'];
	$categoriaEmpleado= $_POST['categoriaEmpleado'];
	$estado='Habilitado';
	$sql = "INSERT INTO EMPLEADO VALUES ('','	$rutEmpleado','$nombreEmpleado','$passwordEmpleado','$emailEmpleado','$categoriaEmpleado','$estado')";
	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha registrado el empleado correctamente');</script>";
		sleep(4);
		echo "<script>window.location.href='../index.php'</script>";
	}else{
		echo "<h1><center>Error al ingresar empleado :(</center></h1>";
	}
?>
