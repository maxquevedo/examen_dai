<?php
	session_start();
	include('head.php');
?>
<div id="content" class="row form-group" style="margin-top: 2%;">
	<form class="form-control" method="post" action="" name="registrar">
		<div class="row form-group">
			<span class="offset-md-4"><h4>¿Que quieres registrar?</h4></span>
		</div>
		<div class="row form-group">
			<div class="col-md-2 offset-md-3">
				<input id="btnEmpresa" type="radio" name="btnTipoUsuario">
				<label for="btnEmpresa"><h5>Empresa</h5></label>
			</div>
			<div class="col offset-md-2">
				<input id="btnParticular" type="radio" name="btnParticular">
				<label for="btnParticular"><h5>Particular</h5></label>
			</div>
		</div>
	</form>
</div>
<script>

	$("#btnEmpresa").click(function(){
		$("#content").load('form-empresa.php');
	});
	$("#btnParticular").click(function(){
		$("#content").load('form-particular.php');
	});

</script>
