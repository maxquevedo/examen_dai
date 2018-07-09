<?php
	session_start();
	if(count($_SESSION) < 1){
		include('head.php');
	}else{
		include('headControlParticular.php');
	}
?>
	<div class="row justify-content-center" style="padding:30px;">
		<h1>¡Registra tus muestras con nosotros!</h1>
	</div>
	<div class="row">
		<div class="col">
			<div class="card" style="width: 18rem;">
	  			<img class="card-img-top" src="../Public/img/tubos.jpg" alt="Card image cap" height="176px">
	  			<div class="card-body">
		    		<h5 class="card-title">Equipamiento completo</h5>
	    			<p class="card-text">Nuestros laboratorios cuentan con un basto equipamiento de alta calidad.</p>
	  			</div>
			</div>
			<br>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
	  			<img class="card-img-top" src="../Public/img/tecnologos.jpg" alt="Card image cap" height="176px">
	  			<div class="card-body">
		    		<h5 class="card-title">Equipo de profesionales</h5>
	    			<p class="card-text">Poseemos a profesionales altamente capacitados y especializados en sus áreas.</p>
	  			</div>
			</div>
			<br>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
	  			<img class="card-img-top" src="../Public/img/manos.jpg" alt="Card image cap" height="176px">
	  			<div class="card-body">
		    		<h5 class="card-title">Transparencia ante todo</h5>
	    			<p class="card-text">Visita nuestra página para ver el código, el estado de tu muestra y los resultados de ésta.</p>
	  			</div>
			</div>
			<br>
		</div>
	</div>
