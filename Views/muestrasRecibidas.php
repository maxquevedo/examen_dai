<?php
	session_start();
	include('head.php');
  require '../DB/conexion_bd.php';
	$sql = "SELECT * FROM ANALISISMUESTRAS";
?>
<h1>Muestras: </h1>
<table class="table table-bordered table-hover" style="margin-bottom: 5%; margin-top:5%;">
	<thead>
		<tr>
			<th>Codigo</th>
			<th>Rut Cliente</th>
			<th>Rut Empleado</th>
      <th>Tipo de Analisis</th>
      <th>Unidad de Medida</th>
      <th>Cantidad</th>
      <th>Estado</th>
		  <th>Fecha Recepcion</th>

		</tr>
	</thead>
	<tbody>
		<?php
			if($rs = $GLOBALS['db']->Execute($sql)){
				while( !$rs->EOF ){
					echo "<tr>";
          echo "<td>".$rs->fields['codigoRamdonCliente']."</td>";
					echo "<td>".$rs->fields['rutCliente']."</td>";
					echo "<td>".$rs->fields['rutEmpleado']."</td>";
					echo "<td>".$rs->fields['tipoAnalisis']."</td>";
          echo "<td>".$rs->fields['tipoMedida']."</td>";
          echo "<td>".$rs->fields['cantidadMuestra']."</td>";
          echo "<td>".$rs->fields['estadoAnalisisMuestras']."</td>";
					echo "<td>".$rs->fields['fechaRecepcion']."</td>";
					echo "</tr>";
					$rs->MoveNext();
				}
			}
		?>
	</tbody>
</table>
<form class="form-control" method="post" action="../Views/form-envioMuestra.php" name="agregar">
	<div class="row form-group">
		<div class="col-md-3 offset-md-3 form-group">
				<span><strong>Ingrese codigo muestra: </strong></span>
		</div>
		<div class="col-lg-3 ">
			<input id="codigoMuestra" type="text" class="form-control" name="codigoMuestra">
		</div>
	</div>
	<div class="col-md-1 offset-md-5 form-group">
		<button type="submit" class="btn btn-secondary">Revisar</button>
	</div>
</form>
