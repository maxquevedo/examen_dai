<?php
require '../Model/classEmpresa.php';
require '../DB/conexion_bd.php';
	if (count($_POST) > 0){
		$sql = "SELECT * FROM empresa where rutEmpresa = '{$_POST['rutEmpresa']}' AND passwordEmpresa = '{$_POST['passwordEmpresa']}'";
		if ($rs = $GLOBALS['db']->Execute($sql)){
			if($rs->EOF){
				echo "<h1 class='align-middle'><center>Ups, contrasenia o usuario equivocados! </center></h1>";
				echo "<h2><center><a href='../Views/iniciarSesion.php'>Click aca para volver al login.</a></center></h2>";
			}else{
				session_start();
				$_SESSION['codigo'] = $rs->fields['codigoEmpresa'];
        		$_SESSION['usuario'] = $rs->fields['nombreEmpresa'];
				$_SESSION['rut'] = $rs->fields['rutEmpresa'];
        		$_SESSION['password'] = $rs->fields['passwordEmpresa'];
        		$_SESSION['direccion'] = $rs->fields['direccionEmpresa'];
        		$_SESSION['tipo'] = "Empresa";
				echo "<script>alert('Bienvenido ".$rs->fields['rutEmpresa']."'); window.location.href='../index.php'</script>";
			}
		}
	}else{
		echo "Lo sentimos, algo ha salido mal.";
	}
?>
