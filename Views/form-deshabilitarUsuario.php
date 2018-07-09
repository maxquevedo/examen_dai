<?php
	include('head.php');
  session_start();
?>
		<div id="content" class="row form-group">
			<form class="form-control" method="get" action="" name="deshabilitar">
				<div class="row form-group">
					<span class="offset-md-4"><h4>Tipo de usuario que quiere deshabilitar</h4></span>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-2">
						<input id="btnAdministrador" type="radio" name="btnTipoUsuario">
						<label for="btnAdministrador"><h5>Administrador</h5></label>
					</div>
					<div class="col offset-md-1">
						<input id="btnCliente" type="radio" name="btnTipoUsuario">
						<label for="btnCliente"><h5>Cliente</h5></label>
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
		$("#content").load('mostrarClientes.php');
	});
	$("#btnAdministrador").click(function(){
		$("#content").load('mostrarAdministradores.php');
	});
  $("#btnEmpleado").click(function(){
		$("#content").load('mostrarEmpleados.php');
	});

</script>
