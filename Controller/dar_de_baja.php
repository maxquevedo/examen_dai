<?php
session_start();
require('../DB/conexion_bd.php');
$rut = $_SESSION['rut'];
$sql = 'UPDATE empleado set  estadoEmpleado = "Deshabilitado" WHERE rutEmpleado ="'.$rut.'"';
if($GLOBALS['db']->Execute($sql)){
	session_destroy();
	session_unset();
	echo "<script>alert('Se ha dado de baja correctamente'); window.location.href='../index.php'";
	echo "</script>";
}

?>