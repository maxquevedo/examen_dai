<?php
	require('Model/funcionRegistrar.php');
  require("Model/classParticular.php");
	$rut = $_POST['rutParticular'];
	$contraseña = $_POST['passwordParticular'];
  $nombre = $_POST['nombreParticular'];
	$direccion = $_POST['direccionParticular'];
	$email = $_POST['emailParticular'];
	$telefono = $_POST['telefonoParticular'];
	$Particular = new Particular('',$rut,$contraseña,$nombre,$direccion,$email,$telefono);
	$Particular->registrarParticular();
?>
