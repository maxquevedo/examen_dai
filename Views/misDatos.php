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
	echo "<div class='container'><div class='row'><div class='col'>";
	echo "<button id='rut' class='btn btn-primary'>Cambiar Rut</button>";
	echo "</div><div class='col'>";
	echo "<button id='nombre'class='btn btn-info'>Cambiar Nombre</button>";
	echo "</div><div class='col'>";
	echo "<button id='contraseña'class='btn btn-success'>Cambiar Contraseña</button>";
	echo "</div><div class='col'>";
	echo "<button id='correo'class='btn btn-warning'>Cambiar Correo</button>";
	echo "</div><div class='col'>";
	echo "<button id='bajar'class='btn btn-danger'>Dar cuenta de baja</button>";
	echo "</div></div>";
	echo "<script> 
			$('#rut').click(function(){
				var nuevo = prompt('Ingrese su nuevo rut');
			})
			$('#nombre').click(function(){
				var nuevo = prompt('Ingrese su nuevo nombre');
			})
			$('#contraseña').click(function(){
				var nuevo = prompt('Ingrese su nueva contraseña');
			})
			$('#correo').click(function(){
				var nuevo = prompt('Ingrese su nuevo correo');
			})
			$('#bajar').click(function(){
				var confirma = confirm('¿Seguro que desea dar de baja su cuenta?');
				if (confirma){
					window.location.href='../Controller/dar_de_baja.php';
				}
			});
		 </script>";
?>