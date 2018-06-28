<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
	<title>Instituto de Salud Publica</title>
	<link rel="stylesheet" href="Public/css/bootstrap.css">
	<link rel="icon" href="Public/img/favicon.jpg">
	<script src="Public/js/jquery-3.3.1.min.js"></script>
	<script src="Public/js/bootstrap.min.js"></script>
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
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<img src="Public/img/logo.png" width="100%">
			</div>
			<div class="col-lg-8">
				<div id="carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
					    <div class="carousel-item active">
					 	   <img class="d-block w-100" src="./Public/img/medicos.jpg" alt="First slide" height="200px">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="./Public/img/muestras.jpg" alt="Second slide" height="200px">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="./Public/img/implementos.jpg" alt="Third slide" height="200px">
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-dark bg-dark">
		<ul class="nav">
			<li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
		</ul>
		<ul class="nav justify-content-end">
			<li class="nav-item"><a class="nav-link" href="Views/registrar.php">Registrarse</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Iniciar Sesión</a></li>
		</ul>
	</nav>
	<div class="container">
	<div class="row" style="padding:30px;">
		<h1 class="text-align-center">¡Registra tus muestras con nosotros!</h1>
	</div>
	<div class="row">
		<div class="col">
			<div class="card" style="width: 18rem;">
	  			<img class="card-img-top" src="Public/img/tubos.jpg" alt="Card image cap" height="176px">
	  			<div class="card-body">
		    		<h5 class="card-title">Equipamiento completo</h5>
	    			<p class="card-text">Nuestros laboratorios cuentan con un basto equipamiento de alta calidad.</p>
	  			</div>
			</div>
			<br>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
	  			<img class="card-img-top" src="Public/img/tecnologos.jpg" alt="Card image cap" height="176px">
	  			<div class="card-body">
		    		<h5 class="card-title">Equipo de profesionales</h5>
	    			<p class="card-text">Poseemos a profesionales altamente capacitados y especializados en sus áreas.</p>
	  			</div>
			</div>
			<br>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
	  			<img class="card-img-top" src="Public/img/manos.jpg" alt="Card image cap" height="176px">
	  			<div class="card-body">
		    		<h5 class="card-title">Transparencia ante todo</h5>
	    			<p class="card-text">Visita nuestra página para ver el código, el estado de tu muestra y los resultados de ésta.</p>
	  			</div>
			</div>
			<br>
		</div>
	</div>






<?php
	require('Views/footer.php');
?>
