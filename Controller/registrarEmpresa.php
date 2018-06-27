<?php
	require('Model/funcionRegistrar.php');
  require("Model/classEmpresa.php");
  $nombre = $_POST['nombreEmpresa'];
	$rut = $_POST['rutEmpresa'];
	$contraseña = $_POST['passwordEmpresa'];
	$direccion = $_POST['direccionEmpresa'];
	$Empresa = new Empresa(''$nombre,$rut,$contraseña,$direccion);
	$Empresa->registrarEmpresa();
?>
