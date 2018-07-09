<?php
require '../DB/conexion_bd.php';
require '../Model/classParticular.php' ;
	$rut = $_POST['rutParticular'];
	$contraseña = $_POST['passwordParticular'];
  $nombre = $_POST['nombreParticular'];
	$direccion = $_POST['direccionParticular'];
	$email = $_POST['emailParticular'];
	$telefono = $_POST['telefonoParticular'];
	$estado='Habilitado';
	$Particular = new Particular('',$rut,$contraseña,$nombre,$direccion,$email,$telefono,$estado);
	$Particular->registrarParticular();
?>
