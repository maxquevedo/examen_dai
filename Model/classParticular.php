<?php
	require('DB/conexion_bd.php');
	class Empresa{
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
	}
