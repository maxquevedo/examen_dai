<?php
	session_start();
  require '../DB/conexion_bd.php';
	$sql = "SELECT * FROM EMPRESA Where estadoEmpresa='Habilitado'";
?>
<h1>Empresas: </h1>
<table class="table table-bordered table-hover" style="margin-bottom: 5%; margin-top:5%;">
	<thead>
		<tr>
      <th>codigo</th>
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
          echo "<td>".$rs->fields['codigoEmpresa']."</td>";
					echo "<td>".$rs->fields['rutEmpresa']."</td>";
					echo "<td>".$rs->fields['nombreEmpresa']."</td>";
          echo "<td>".$rs->fields['emailEmpresa']."</td>";
          echo "<td>".$rs->fields['categoriaEmpresa']."</td>";
          echo "<td>".$rs->fields['estadoEmpresa']."</td>";
					echo "</tr>";
					$rs->MoveNext();
				}
			}
		?>
	</tbody>
</table>
<form class="form-control" method="post" action="../Controller/deshabilitarEmpresa.php" name="deshabilitar">
	<div class="row form-group">
		<div class="col-md-3 offset-md-3 form-group">
				<span><strong>Ingrese rut de la Empresa: </strong></span>
		</div>
		<div class="col-lg-3 ">
			<input id="rutDeshabilitaEmpresa" type="text" class="form-control" name="rutDeshabilitaEmpresa">
		</div>
	</div>
	<div class="col-md-1 offset-md-5 form-group">
		<button type="submit" class="btn btn-secondary">Deshabilitar</button>
	</div>
</form>
