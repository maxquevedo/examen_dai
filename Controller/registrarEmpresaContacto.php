<?php
  require '../Model/classEmpresa.php';
	require '../Model/classContacto.php';
  $nombre = $_POST['nombreEmpresa'];
	$rut = $_POST['rutEmpresa'];
	$contraseña = $_POST['passwordEmpresa'];
	$direccion = $_POST['direccionEmpresa'];
	$emailContacto=$_POST['emailContacto'];
	$nombreContacto=$_POST['nombreContacto'];
	$rutContacto=$_POST['rutContacto'];
	$telefonoContacto=$_POST['telefonoContacto'];
	$Empresa = new Empresa('',$nombre,$rut,$contraseña,$direccion);
	$Contacto=new Contacto($emailContacto,$nombreContacto,$rutContacto,$telefonoContacto);
	$Empresa->registrarEmpresa();
	$Contacto->registrarContacto();
?>
