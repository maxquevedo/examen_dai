<?php
  	session_start();
	include('head.php');
?>
		<div id="content" class="row form-group">
			<form class="form-control" method="get" action="" name="deshabilitar">
				<div class="row form-group">
					<span class="offset-md-4"><h4>Tipo de usuario que quiere deshabilitar</h4></span>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-2">
						<input id="btnEmpresa" type="radio" name="btnTipoUsuario">
						<label for="btnEmpresa"><h5>Empresa</h5></label>
					</div>
					<div class="col offset-md-1">
						<input id="btnCliente" type="radio" name="btnTipoUsuario">
						<label for="btnCliente"><h5>Particular</h5></label>
					</div>
          <div class="col offset-md-0">
						<input id="btnEmpleado" type="radio" name="btnTipoUsuario">
						<label for="btnEmpleado"><h5>Empleado</h5></label>
					</div>
				</div>
			</form>
		</div>

<script>

	$("#btnCliente").click(function(){
		$("#content").load('../Controller/mostrarParticulares.php');
	});
	$("#btnEmpresa").click(function(){
		$("#content").load('../Controller/mostrarEmpresas.php');
	});
  $("#btnEmpleado").click(function(){
		$("#content").load('../Controller/mostrarEmpleados.php');
	});

</script>
