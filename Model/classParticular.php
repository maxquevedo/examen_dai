<?php
	require '../DB/conexion_bd.php';
	class Particular{
		public $codigo;
    public $rut;
    public $password;
    public $nombre;
		public $direccion;
    public $email;
    public $telefono;

		function __construct($codigo,$rut,$password,$nombre,$direccion,$email,$telefono){
			$this->codigo = $cod;
      $this->rut = 	$rut;
      $this->password = $password;
      $this->nombre = $nombre;
			$this->direccion = $direccion;
      $this->email = $email;
      $this->telefono = $telefono;
		}
		function registrarParticular(){
		  $sql = "INSERT INTO PARTICULAR VALUES (
		  '',
		  '$this->rut' ,
		  '$this->password',
		  '$this->nombre',
		  '$this->direccion',
		  '$this->email',
		  '$this->telefono')";
		  if($rs = $GLOBALS['db']->Execute($sql)){
		    echo "<script>alert('Particular registrado con exito');</script>";
		    echo "<script>window.location.href='../index.php'</script>";
		  }else{
		    echo "<h3>Error al registrar Particular</h3>";
		    sleep(5);
		    echo "<script>window.load.href='../index.php'</script>";
		  }
		}
	}
