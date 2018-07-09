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
			public $estado;

		function __construct($codigo,$rut,$password,$nombre,$direccion,$email,$telefono,$estado){
			$this->codigo = $codigo;
      		$this->rut = 	$rut;
      		$this->password = $password;
      		$this->nombre = $nombre;
			   	$this->direccion = $direccion;
      		$this->email = $email;
      		$this->telefono = $telefono;
					$this->estado = $estado;
		}

		function registrarParticular(){
		  $sql = "INSERT INTO PARTICULAR VALUES (
		  '',
		  '$this->rut' ,
		  '$this->password',
		  '$this->nombre',
		  '$this->direccion',
		  '$this->email',
		  '$this->telefono',
			'$this->estado')";
		  if($rs = $GLOBALS['db']->Execute($sql)){
		    echo "<script>alert('Particular registrado con exito');</script>";
		    echo "<script>window.location.href='../Views/iniciarSesion.php'</script>";
		  }else{
		    echo "<h3>Error al registrar Particular</h3>";
		    sleep(5);
		    echo "<script>window.load.href='../Views/index.php'</script>";
		  }
		}
	}
