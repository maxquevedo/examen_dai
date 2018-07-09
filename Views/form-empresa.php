
<form class="form-control" method="post" action="../Controller/registrarEmpresaContacto.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Empresa</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Nombre
		</div>
		<div class="col-lg-3 ">
			<input id="nombreEmpresa" type="text" class="form-control" name="nombreEmpresa">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Rut
		</div>
		<div class="col-lg-3 ">
			<input id="rutEmpresa" type="text" class="form-control" name="rutEmpresa">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Contraseña
		</div>
		<div class="col-lg-3 ">
			<input id="passwordEmpresa" type="password" class="form-control" name="passwordEmpresa">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Dirección
		</div>
		<div class="col-lg-3 ">
			<input id="direccionEmpresa" type="text" class="form-control" name="direccionEmpresa">
		</div>
	</div>
	<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Contacto</h4>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Email
		</div>
		<div class="col-lg-3 ">
			<input id="emailContacto" type="email" class="form-control" name="emailContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Nombre
		</div>
		<div class="col-lg-3 ">
			<input id="nombreContacto" type="text" class="form-control" name="nombreContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Rut
		</div>
		<div class="col-lg-3 ">
			<input id="rutContacto" type="text" class="form-control" name="rutContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Teléfono
		</div>
		<div class="col-lg-3 ">
			<input id="telefonoContacto" type="text" class="form-control" name="telefonoContacto">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-5 form-group">
			<button type="submit" class="btn btn-primary">Enviar</button>
		</div>
		<div class="col-md1">
			<button id="btnLimpiar" class="btn btn-secondary">Limpiar</button>
		</div>
	</div>
</form>
<script>
	$("#btnLimpiar").click(function(e){
		e.preventDefault();
		$("#nombreEmpresa").val('');
		$("#rutEmpresa").val('');
		$("#passwordEmpresa").val('');
		$("#direccionEmpresa").val('');
		$("#emailContacto").val('');
		$("#nombreContacto").val('');
		$("#rutContacto").val('');
		$("#telefonoContacto").val('');
	})
</script>
</div>
