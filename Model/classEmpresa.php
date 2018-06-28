<?php
	require('DB/conexion_bd.php');
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
	}
