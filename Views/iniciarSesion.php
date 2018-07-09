<?php
	include('head.php');
?>
<div id="content" class="container" style="margin-top:2%;  margin-bottom:2%;">
	<div class="row form-group">
			<form class="form-control form-group" name="login" action="../Controller/verificarLoginParticular.php" method="post">
				<div class="row form-group">
					<div class="col-sm-1 offset-sm-5">
						<h3><center>Particular</center></h3>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-1 offset-md-4">
						<span class="font-weight-bold"> Rut: </span>
					</div>
					<div class="col-md-2 offset-sm-1">
						<input type="text" name="rutParticular" id="rutParticular" class="form-control" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2 offset-md-4">
						<span class="font-weight-bold">Contraseña:</span>
					</div>
					<div class="col-md-2">
					 	<input type="password" name="passwordParticular" id="passwordParticular" class="form-control">
					 </div>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-5">
						<button class="form-control btn btn-primary font-weight-bold" type="submit">Ingresar</button>
					</div>
				</div>
			</form>
	</div>
		<div class="row form-group">
			<form class="form-control form-group" name="login" action="../Controller/verificarLoginEmpresa.php" method="post">
				<div class="row form-group">
					<div class="col-md-1 offset-md-5">
						<h3><center>Empresa</center></h3>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-1 offset-md-4">
						<span class="font-weight-bold"> Rut: </span>
					</div>
					<div class="col-md-2 offset-md-1">
						<input type="text" name="rutEmpresa" id="rutEmpresa" class="form-control" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-4">
						<span class="font-weight-bold">Contraseña:</span>
					</div>
					<div class="col-md-2">
					 	<input type="password" name="passwordEmpresa" id="passwordEmpresa" class="form-control">
					 </div>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-5">
						<button class="form-control btn btn-primary font-weight-bold" type="submit">Ingresar</button>
					</div>
				</div>
			</form>
      <form class="form-control form-group" name="login" action="../Controller/verificarLoginEmpleado.php" method="post">
				<div class="row form-group">
					<div class="col-md-1 offset-md-5">
						<h3><center>Empleado</center></h3>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-1 offset-md-4">
						<span class="font-weight-bold"> Rut: </span>
					</div>
					<div class="col-md-2 offset-sm-1">
						<input type="text" name="rutEmpleado" id="rutEmpleado" class="form-control" >
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-4">
						<span class="font-weight-bold">Contraseña:</span>
					</div>
					<div class="col-md-2">
					 	<input type="password" name="passwordEmpleado" id="passwordEmpleado" class="form-control">
					 </div>
				</div>
				<div class="row form-group">
					<div class="col-md-2 offset-md-5">
						<button class="form-control btn btn-primary font-weight-bold" type="submit">Ingresar</button>
					</div>
				</div>
			</form>
	 </div>
  </div>