<?php
	session_start();
  require '../DB/conexion_bd.php';
	$sql = "SELECT * FROM PARTICULAR Where estadoParticular='Habilitado'";
?>
<h1>Particulares: </h1>
<table class="table table-bordered table-hover" style="margin-bottom: 5%; margin-top:5%;">
	<thead>
		<tr>
      <th>Codigo</th>
      <th>Rut</th>
      <th>Nombre</th>
      <th>Direccion</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Estado</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if($rs = $GLOBALS['db']->Execute($sql)){
				while( !$rs->EOF ){
					echo "<tr>";
          echo "<td>".$rs->fields['codigoParticular']."</td>";
					echo "<td>".$rs->fields['rutParticular']."</td>";
					echo "<td>".$rs->fields['nombreParticular']."</td>";
					echo "<td>".$rs->fields['direccionParticular']."</td>";
          echo "<td>".$rs->fields['emailParticular']."</td>";
          echo "<td>".$rs->fields['telefonoParticular']."</td>";
          echo "<td>".$rs->fields['estadoParticular']."</td>";
					echo "</tr>";
					$rs->MoveNext();
				}
			}
		?>
	</tbody>
</table>
<form class="form-control" method="post" action="../Controller/deshabilitarParticular.php" name="deshabilitar">
	<div class="row form-group">
		<div class="col-md-3 offset-md-3 form-group">
				<span><strong>Ingrese rut del Particular: </strong></span>
		</div>
		<div class="col-lg-3 ">
			<input id="rutDeshabilitaParticular" type="text" class="form-control" name="rutDeshabilitaParticular">
		</div>
	</div>
	<div class="col-md-1 offset-md-5 form-group">
		<button type="submit" class="btn btn-secondary">Deshabilitar</button>
	</div>
</form>
