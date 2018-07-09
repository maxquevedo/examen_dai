<?php
	session_start();
	require('head.php');
	require('../DB/conexion_bd.php');
	echo "<br>";
	$rut = $_SESSION['rut'];
	echo "<table class='table table-bordered'>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>Rut</th>";
	echo "<th>Nombre</th>";
	echo "<th>Contraseña</th>";
	echo "<th>Correo</th>";
	echo "<th>Categoria</th>";
	echo "<th>Estado</th>";
	echo "</tr>";
	echo"</thead>";
	echo "<tbody>";
	if($_SESSION['tipo'] == "Empleado"){
		$sql = "SELECT * FROM empleado where rutEmpleado = ".$rut;
		if($rs = $GLOBALS['db']->Execute($sql)){
			while(!$rs->EOF){
				echo "<tr>";
				echo "<td>".$rs->fields['rutEmpleado']."</td>";
				echo "<td>".$rs->fields['nombreEmpleado']."</td>";
				echo "<td>".$rs->fields['passwordEmpleado']."</td>";
				echo "<td>".$rs->fields['emailEmpleado']."</td>";
				echo "<td>".$rs->fields['categoriaEmpleado']."</td>";
				echo "<td>".$rs->fields['estadoEmpleado']."</td>";
				echo "</tr>";
				$rs->MoveNext();
			}
		}
	}
	echo "</tbody>";
	echo "</table>";
?>