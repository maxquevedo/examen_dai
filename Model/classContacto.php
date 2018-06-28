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
			'$this->email',
			'$this->nombre',
		  '$this->rut' ,
			'$this->telefono')";

		  if($rs = $GLOBALS['db']->Execute($sql)){
		    echo "<script>alert('Contacto registrado con exito');</script>";
		  }else{
		    echo "<h3>Error al registrar contacto</h3>";
		    sleep(5);
		    echo "<script>window.load.href='../index.php'</script>";
		  }
		}
	}
