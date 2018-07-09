<?php
	require '../DB/conexion_bd.php';
	class Contacto{
		public $emailContacto;
		public $nombreContacto;
    public $rutContacto;
    public $telefonoContacto;

		function __construct($emailContacto,$nombreContacto,$rutContacto,$telefonoContacto){
			$this->emailContacto = $emailContacto;
			$this->nombreContacto = $nombreContacto;
			$this->rutContacto = 	$rutContacto;
			$this->telefonoContacto = $telefonoContacto;
		}
		function registrarContacto(){
		  $sql = "INSERT INTO CONTACTO VALUES (
			'$this->emailContacto ',
			'$this->nombreContacto ',
		  '$this->rutContacto ' ,
			'$this->telefonoContacto ')";
		  if($rs = $GLOBALS['db']->Execute($sql)){
		    echo "<script>alert('Contacto registrado con exito');</script>";
				echo "<script>window.load.href='../Views/index.php'</script>";
			else if{
		    echo "<h3>Error al registrar contacto</h3>";
		  }
		}
	}
}
