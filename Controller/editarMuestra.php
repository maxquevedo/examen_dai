<?php
	session_start();
	require '../DB/conexion_bd.php';
	date_default_timezone_set('America/Santiago');
	$fechaEnvio = date("d/m/y");
	$rutEmpleado = $_SESSION['rut'];
	$tipoAnalisis = $_POST['tipoAnalisis'];
	$tipoMedida = $_POST['tipoMedida'];
  $cantidadMedida = $_POST['cantidadMuestra'];
	$estadoMedida= 'En Proceso';
	$sql = "UPDATE ANALISISMUESTRAS SET rutEmpleado='$rutEmpleado',tipoAnalisis='$tipoAnalisis',tipoMedida='$tipoMedida',fechaRecepcion='$fechaEnvio',cantidadMuestra='$cantidadMedida',estadoAnalisisMuestras='$estadoMedida'";
	if($GLOBALS['db']->Execute($sql)){
		echo "<script>alert('Se ha recepcionado la muestra correctamente');</script>";
		echo "<script>window.location.href='../index.php'</script>";
	}else{
    echo "error";
  }
		?>
