
<form class="form-control" method="post" action="../Controller/registrarParticular.php" name="registrar">
	<div class="row form-group ">
		<h4 class=" col-lg-9 font-weight-bold offset-md-2 text-center"> Particular</h4>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Rut
		</div>
		<div class="col-lg-3 ">
			<input id="rutParticular" type="text" class="form-control" name="rutParticular">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Contraseña
		</div>
		<div class="col-lg-3 ">
			<input id="passwordParticular" type="password" class="form-control" name="passwordParticular">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Nombre
		</div>
		<div class="col-lg-3 ">
			<input id="nombreParticular" type="text" class="form-control" name="nombreParticular">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Dirección
		</div>
		<div class="col-lg-3 ">
			<input id="direccionParticular" type="text" class="form-control" name="direccionParticular">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Email
		</div>
		<div class="col-lg-3 ">
			<input id="emailParticular" type="email" class="form-control" name="emailParticular">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
			Teléfono
		</div>
		<div class="col-lg-3 ">
			<input id="telefonoParticular" type="text" class="form-control" name="telefonoParticular">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-5 form-group">
			<button type="submit" class="btn btn-primary">Registrar</button>
		</div>
		<div class="col-md-1">
		<div class="col-lg-1">
			<button id="btnLimpiar" class="btn btn-secondary">Limpiar</button>
		</div>
	</div>
</form>
<script>
	$("#btnLimpiar").click(function(e){
		e.preventDefault();
		$("#nombreParticular").val('');
		$("#rutParticular").val('');
		$("#passwordParticular").val('');
		$("#direccionParticular").val('');
		$("#emailParticular").val('');
		$("#telefonoParticular").val('');
	})
</script>
</div>
