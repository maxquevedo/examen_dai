<?php
require '../DB/conexion_bd.php';
	if (count($_POST) > 0){
		$sql = "SELECT * FROM empleado where rutEmpleado = '{$_POST['rutEmpleado']}' AND passwordEmpleado = '{$_POST['passwordEmpleado']}'";
		if ($rs = $GLOBALS['db']->Execute($sql)){
			if($rs->EOF){
				echo "<h1 class='align-middle'><center>Ups, contrasenia o usuario equivocados! </center></h1>";
				echo "<h2><center><a href='../Views/iniciarSesion.php'>Click aca para volver al login.</a></center></h2>";
			}else{
				session_start();
				$_SESSION['codigo'] = $rs->fields['codigoEmpleado'];
		        $_SESSION['rut'] = $rs->fields['rutEmpleado'];
				$_SESSION['usuario'] = $rs->fields['nombreEmpleado'];
        		$_SESSION['password'] = $rs->fields['passwordEmpleado'];
				$_SESSION['email'] = $rs->fields['emailEmpleado'];
        		$_SESSION['categoria'] = $rs->fields['categoriaEmpleado'];
        		$_SESSION['estado'] = $rs->fields['estadoEmpleado'];
        		$_SESSION['tipo'] = "Empleado";

			if ($rs->fields['estadoEmpleado']=='Habilitado') {
				if($rs->fields['categoria']=='A'){
				echo "<script>alert('Bienvenido ".$rs->fields['nombreEmpleado']." [Nivel: Administrador]'); window.location.href='../Views/indexEmpleadoA.php'</script>";
				}else if ($rs->fields['categoria']=='R') {
				echo "<script>alert('Bienvenido ".$rs->fields['nombreEmpleado']." [Nivel: Receptor de Muestras]'); window.location.href='../Views/indexEmpleadoR.php'</script>";
				}else if ($rs->fields['categoria']=='T') {
				echo "<script>alert('Bienvenido ".$rs->fields['nombreEmpleado']." [Nivel: Tecnico de Laboratorio]'); window.location.href='../Views/indexEmpleadoT.php'</script>";
				if($rs->fields['categoriaEmpleado']=='A'){
				echo "<script>alert('Bienvenido ".$rs->fields['nombreEmpleado']." [Nivel: Administrador]'); window.location.href='../Views/index.php'</script>";
				}else if ($rs->fields['categoriaEmpleado']=='R') {
				echo "<script>alert('Bienvenido ".$rs->fields['nombreEmpleado']." [Nivel: Receptor de Muestras]'); window.location.href='indexEmpleadoR.php'</script>";
				}else if ($rs->fields['categoriaEmpleado']=='T') {
				echo "<script>alert('Bienvenido ".$rs->fields['nombreEmpleado']." [Nivel: Tecnico de Laboratorio]'); window.location.href='indexEmpleadoT.php'</script>";
				}else{
				echo "<script>alert('El empleado ".$rs->fields['nombreEmpleado']." no tiene categoria definida'); window.location.href='../Views/index.php'</script>";
				}
			}else{
			echo "<script>alert('El empleado ".$rs->fields['nombreEmpleado']." se encuentra deshabilitado'); window.location.href='../Views/iniciarSesion.php'</script>";
			}
		}
	}
}else{
		echo "NO";
	}
?>
