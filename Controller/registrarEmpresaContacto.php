<?php
	require '../Model/classEmpresa.php';
	require ('../DB/conexion_bd.php');
	$nombre = $_POST['nombreEmpresa'];
	$rut = $_POST['rutEmpresa'];
	$contraseña = $_POST['passwordEmpresa'];
	$direccion = $_POST['direccionEmpresa'];
	$estado='Habilitado';
	$emailContacto=$_POST['emailContacto'];
	$nombreContacto=$_POST['nombreContacto'];
	$rutContacto=$_POST['rutContacto'];
	$telefonoContacto=$_POST['telefonoContacto'];
	$Empresa = new Empresa('',$nombre,$rut,$contraseña,$direccion,$estado);
	$sql = "INSERT INTO contacto VALUES ('".$emailContacto."','".$nombreContacto."','".$rutContacto."','".$telefonoContacto."')";
	if($rs = $GLOBALS['db']->Execute($sql)){
  		echo "<script>alert('Se ha registrado el contacto correctamente');</script>";
  		$Empresa->registrarEmpresa();
	}else{
		echo "<h1><center>Algo ha salido mal :(</center></h1>";
	}
	//$Empresa ->registrarEmpresa();
?>
