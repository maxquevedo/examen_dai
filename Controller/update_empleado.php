<?php
	session_start();
	require('../DB/conexion_bd.php');	
	if(count($_POST) == 3 ){
		$antiguo = $_POST['antiguo'];
		$cambiar = $_POST['cambiar'];
		$nuevo = $_POST['nuevo'];
		$sql = "UPDATE empleado SET ".$cambiar." =".$nuevo." WHERE ".$cambiar." = ".$antiguo."";
		if($rs = $GLOBALS['db']->Execute($sql)){
			switch ($cambiar){
				case 'rutEmpleado':
					$_SESSION['rut'] = $nuevo;
				break;
				case 'nombreEmpleado':
					$_SESSION['usuario'] = $nuevo;
					break;
				case 'passwordEmpleado':
					$_SESSION['password'] = $nuevo;
					break;
					default:break;
			}
			echo "<script>alert('Cambiado con exito');</script>";
			echo "<script>window.location.href='../index.php'</script>";
		}else{
			echo "<h4>Algo no va bien, revisa que los datos ingresados son correctos.</h4>";
			echo "<script>window.location.href='update_empleado'</script>";
		}
	}else{
		echo '<form class="containter" style="margin-top:2%;" method="post" action="../Controller/update_empleado.php">
				<div class="row justify-content-center">
					<h4>¿Qué quieres cambiar?</h4>
				</div>
				<div class="row form-group">
					<div class="col">
						<br>
						<center>
							<input type="radio" name="cambiar" value="rutEmpleado">Rut
							<input type="radio" name="cambiar" value="emailEmpleado">Correo
							<input type="radio" name="cambiar" value="passwordEmpleado">Contraseña				
						</center>
					</div>
				</div>
				<div class="row justify-content-center form-group">
					Antiguo Rut/Correo/Contraseña 
					<input type="text" name="antiguo">
				</div>
				<div class="row justify-content-center form-group">
					Nuevo Rut/Correo/Contraseña 
					<input type="text" name="nuevo">
				</div>
				<div class="row justify-content-center">
				<button id="enviar" class="btn btn-primary">Enviar</button>
				</div>
			</form>';
	}
?>

