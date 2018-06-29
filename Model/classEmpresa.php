<?php
	require '../DB/conexion_bd.php';
	class Empresa{
		public $codigo;
    public $nombre;
		public $rut;
		public $password;
		public $direccion;

		function __construct($codigo,$nombre,$rut,$password,$direccion){
			$this->codigo = $codigo;
      $this->nombre = $nombre;
			$this->rut = 	$rut;
			$this->password = $password;
			$this->direccion = $direccion;
		}
		function registrarEmpresa(){
		  $sql = "INSERT INTO EMPRESA VALUES (
		  '',
		  '$this->nombre',
		  '$this->rut' ,
		  '$this->password',
		  '$this->direccion')";
		   if($rs = $GLOBALS['db']->Execute($sql)){
		    echo "<script>alert('Empresa registrado con exito');</script>";
			  echo "<script>window.load.href='../index.php' </script>";
		  }else{
		    echo "<h3>Error al registrar Empresa</h3>";
		    sleep(5);
		    echo "<script>window.load.href='../index.php'</script>";
		  }
		}
	}
