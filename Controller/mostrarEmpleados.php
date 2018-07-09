<?php
	session_start();
  require '../DB/conexion_bd.php';
	$sql = "SELECT * FROM EMPLEADO Where estadoEmpleado='Habilitado'";
?>
<h1>Empleados: </h1>
<table class="table table-bordered table-hover" style="margin-bottom: 5%; margin-top:5%;">
	<thead>
		<tr>
      <th>Codigo</th>
      <th>Rut</th>
      <th>Nombre</th>
      <th>Email</th>
      <th>Categoria</th>
      <th>Estado</th>
		</tr>
	</thead>
	<tbody>
		<?php
			if($rs = $GLOBALS['db']->Execute($sql)){
				while( !$rs->EOF ){
					echo "<tr>";
          echo "<td>".$rs->fields['codigoEmpleado']."</td>";
					echo "<td>".$rs->fields['rutEmpleado']."</td>";
					echo "<td>".$rs->fields['nombreEmpleado']."</td>";
          echo "<td>".$rs->fields['emailEmpleado']."</td>";
          echo "<td>".$rs->fields['categoriaEmpleado']."</td>";
          echo "<td>".$rs->fields['estadoEmpleado']."</td>";
					echo "</tr>";
					$rs->MoveNext();
				}
			}
		?>
	</tbody>
</table>
<form class="form-control" method="post" action="../Controller/deshabilitarEmpleado.php" name="deshabilitar">
	<div class="row form-group">
		<div class="col-md-3 offset-md-3 form-group">
				<span><strong>Ingrese rut del Empleado: </strong></span>
		</div>
		<div class="col-lg-3 ">
			<input id="rutDeshabilitaEmpleado" type="text" class="form-control" name="rutDeshabilitaEmpleado">
		</div>
	</div>
	<div class="col-md-1 offset-md-5 form-group">
		<button type="submit" class="btn btn-secondary">Deshabilitar</button>
	</div>
</form>
