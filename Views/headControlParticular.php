<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
	<title>Instituto de Salud Publica</title>
	<link rel="stylesheet" href="../Public/css/bootstrap.css">
	<link rel="icon" href="../Public/img/favicon.jpg">
	<script src="../Public/js/jquery-3.3.1.min.js"></script>
	<script src="../Public/js/bootstrap.min.js"></script>
	<style>
		body nav a{
			text-decoration: none;
			color:white;
		}
		body nav a:hover{
			text-decoration: none;
			color:#c0c0c0;
		}
	</style>
</head>
<?php
    require('../DB/conexion_bd.php');
  ?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<img src="../Public/img/logo.png" width="100%">
			</div>
			<div class="col-lg-8">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					    <div class="carousel-item active">
					 	   <img class="d-block w-100" src="../Public/img/medicos.jpg" alt="First slide" height="200px">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="../Public/img/muestras.jpg" alt="Second slide" height="200px">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="../Public/img/implementos.jpg" alt="Third slide" height="200px">
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-dark bg-dark">
		<ul class="nav">
			<li class="nav-item"><a class="nav-link" href="../Views/index.php">Inicio</a></li>
		</ul>
		<ul class="nav justify-content-end">
		  <li class="nav-link active"><a class="text-right" style="color:white;" href="../Controller/cerrarSesion.php" id="cerrar">Cerrar Sesión</a></li>
		</ul>
	</nav>
	<div class="container" style="margin-top: 2%;">
