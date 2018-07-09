<?php
require '../Model/classParticular.php';
require '../DB/conexion_bd.php';
	if (count($_POST) > 0){
		$sql = "SELECT * FROM particular where rutParticular = '{$_POST['rutParticular']}' AND passwordParticular = '{$_POST['passwordParticular']}'";
		if ($rs = $GLOBALS['db']->Execute($sql)){
			if($rs->EOF){
				echo "<h1 class='align-middle'><center>Ups, contrasenia o usuario equivocados! </center></h1>";
				echo "<h2><center><a href='../Views/iniciarSesion.php'>Click aca para volver al login.</a></center></h2>";
			}else{
				session_start();
				$_SESSION['codigo'] = $rs->fields['codigoParticular'];
       			$_SESSION['rut'] = $rs->fields['rutParticular'];
        		$_SESSION['password'] = $rs->fields['passwordParticular'];
        		$_SESSION['usuario'] = $rs->fields['nombreParticular'];
        		$_SESSION['direccion'] = $rs->fields['direccionParticular'];
        		$_SESSION['email'] = $rs->fields['emailParticular'];
        		$_SESSION['telefono'] = $rs->fields['telefonoParticular'];
        		$_SESSION['tipo'] = "Particular";
				echo "<script>alert('Bienvenido ".$rs->fields['nombreParticular']."'); window.location.href='../Views/index.php'</script>";
			}
		}

	}else{
		echo "NO";
	}
?>
