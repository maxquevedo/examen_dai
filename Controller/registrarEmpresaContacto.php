<?php
	require '../Model/classEmpresa.php';
	$nombre = $_POST['nombreEmpresa'];
	$rut = $_POST['rutEmpresa'];
	$contraseña = $_POST['passwordEmpresa'];
	$direccion = $_POST['direccionEmpresa'];
	$estado='Habilitado';
	$emailContacto=$_POST['emailContacto'];
	$nombreContacto=$_POST['nombreContacto'];
	$rutContacto=$_POST['rutContacto'];
	$telefonoContacto=$_POST['telefonoContacto'];
	$Empresa = new Empresa('',$nombre,$rut,$contraseña,$direccion);

	$sql1 = "INSERT INTO contacto VALUES ('$emailContacto','$nombreContacto','$rutContacto','$telefonoContacto')";

	if($GLOBALS['db']->Execute($sql1)){
  		echo "<script>alert('Se ha registrado el contacto correctamente');</script>";
  		$Empresa->registrarEmpresa();
	}else{
		echo "<h1><center>Algo ha salido mal :(</center></h1>";
	}
?>
