<html lang="es">
<head>
	<meta charset="utf-8" name="viewport" content="width=device-width initial-scale=1.0">
	<title>Instituto de Salud Publica</title>
	<link rel="stylesheet" href="Public/css/bootstrap.css">
	<link rel="icon" href="Public/img/favicon.jpg">
	<script src="Public/js/jquery-3.3.1.min.js"></script>
	<script src="Public/js/bootstrap.min.js"></script>
	<style>
		*{
			color:white;
		}

		body nav a{
			text-decoration: none;
			color:white;
		}
		body nav a:hover{
			text-decoration: none;
			color:#c0c0c0;
		}
	</style>
	<script>
		$('#carousel').carousel({
			interval: 1000;
		})
	</script>
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
					 	   <img class="d-block w-100" src="Public/img/medicos.jpg" alt="First slide" height="200px">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="Public/img/muestras.jpg" alt="Second slide" height="200px">
					    </div>
					    <div class="carousel-item">
					    	<img class="d-block w-100" src="Public/img/implementos.jpg" alt="Third slide" height="200px">
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
			<li class="nav-item"><a class="nav-link" href="#">Registrarse</a></li>
			<li class="nav-item"><a class="nav-link" href="#">Iniciar Sesión</a></li>
		</ul>
	</nav>
	<header class="page-header">

	</header>
	<div class="container">