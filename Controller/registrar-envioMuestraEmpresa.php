<?php
	session_start();
  require '../DB/conexion_bd.php';
	$codigoRandomEmpresa= rand();
	$codigoEmpresa=	$_SESSION['codigoEmpresa'];
	$rutContacto= $_POST['rutContacto'];
	$nombreContacto= $_POST['nombreContacto'];
	$emailContacto= $_POST['emailContacto'];
	$telefonoContacto= $_POST['telefonoContacto'];
	$sql1 = "INSERT INTO CONTACTO VALUES ('$emailContacto','$codigoEmpresa','$nombreContacto','$rutContacto')";
	$sql2 = "INSERT INTO ANALISISMUESTRAS VALUES ('','','','','','$codigoRandomEmpresa','','$rutContacto')";

	if($GLOBALS['db']->Execute($sql1)){
		echo "<script>alert('Se ha registrado el contacto de la empresa correctamente');</script>";
		if($GLOBALS['db']->Execute($sql2)){
			echo "<script>alert('Se ha registrado la muestra correctamente');</script>";
			echo "<script>window.location.href='index.php'</script>";
		}else{
			echo "Algo ha salido mal :(";
		}
		sleep(4);
		echo "<script>window.location.href='../Views/index.php'</script>";
	}else{
		echo "<h1><center>Erro al ingresar contacto :(</center></h1>";
	}
?>
