<?php
	include('head.php');
  session_start();
?>
<form class="form-control" method="post" action="../Controller/registrarEmpleado.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Empleado</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Rut  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="rutEmpleado" type="text" class="form-control" name="rutEmpleado">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Nombre  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="nombreEmpleado" type="text" class="form-control" name="nombreEmpleado">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Contraseña  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="passwordEmpleado" type="password" class="form-control" name="passwordEmpleado">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Email  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="emailEmpleado" type="email" class="form-control" name="emailEmpleado">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Categoria </span>
		</div>
		<div class="col-lg-3 ">
			<select name="categoriaEmpleado">
	    <option value="A">Administrador</option>
	    <option value="R">Receptor de Muestras</option>
	    <option value="T">Tecnico de Laboratorio</option>
	  </select>
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-5 form-group">
			<button type="submit" class="btn btn-secondary">Registrar</button>
		</div>
		<div class="col-md-1">
			<button id="btnLimpiar" class="btn btn-secondary">Limpiar</button>
		</div>
	</div>
</form>
<script>
	$("#btnLimpiar").click(function(e){
		e.preventDefault();
		$("#rutEmpleado").val('');
		$("#nombreEmpleado").val('');
		$("#passwordEmpleado").val('');
		$("#emailEmpleado").val('');
		$("#categoriaEmpleado").val('');
	})
</script>
</div>
