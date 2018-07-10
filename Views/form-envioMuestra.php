<?php
  session_start();
	include('head.php');
?>
<form class="form-control" method="post" action="../Controller/editarMuestra.php" name="registrar">
  <div class="row form-group">
    <div class="col-md-1 offset-md-4 form-group">
        <span>Tipo de Analisis </span>
    </div>
    <div class="col-lg-3 ">
      <select name="tipoAnalisis">
      <option value="deteccion de micotoxinas">detección de micotoxinas </option>
      <option value="deteccion de metales pesados">detección de metales pesados</option>
      <option value="deteccion de plaguicidas prohibidos">detección de plaguicidas prohibidos</option>
      <option value="deteccion de marea roja ">detección de marea roja </option>
      <option value="deteccion de bacterias nocivas ">detección de bacterias nocivas </option>
    </select>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-1 offset-md-4 form-group">
        <span>Tipo de Medida </span>
    </div>
    <div class="col-lg-3 ">
      <select name="tipoMedida">
      <option value="gramos">gramos </option>
      <option value="cm3">cm3</option>
    </select>
    </div>
  </div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-4 form-group">
				<span>Cantidad  </span>
		</div>
		<div class="col-lg-3 ">
			<input id="cantidadMuestra" type="number" class="form-control" name="cantidadMuestra">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-1 offset-md-5 form-group">
			<button type="submit" class="btn btn-secondary">Enviar</button>
		</div>
		<div class="col-md-1">
			<button id="btnLimpiar" class="btn btn-secondary">Limpiar</button>
		</div>
	</div>
</form>
<script>
	$("#btnLimpiar").click(function(e){
		e.preventDefault();
		$("#tipoAnalisis").val('');
		$("#tipoMedida").val('');
		$("#cantidadMuestra").val('');
	})
</script>
</div>
