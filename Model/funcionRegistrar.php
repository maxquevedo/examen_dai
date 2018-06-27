<?php
function registrarEmpresa(){
  $sql = "INSERT INTO EMPRESA VALUES (
  '',
  '$this->nombre',
  '$this->rut' ,
  '$this->password',
  '$this->direccion')";
  if($rs = $GLOBALS['db']->Execute($sql)){
    echo "<script>alert('Empresa registrado con exito');</script>";
    echo "<script>window.location.href='index.php'</script>";
  }else{
    echo "<h3>Error al registrar</h3>";
    sleep(5);
    echo "<script>window.load.href='index.php'</script>";
  }
}

function registrarParticular(){
  $sql = "INSERT INTO PARTICULAR VALUES (
  '',
  '$this->rut' ,
  '$this->password',
  '$this->nombre',
  '$this->direccion',
  '$this->email',
  '$this->telefono')";
  if($rs = $GLOBALS['db']->Execute($sql)){
    echo "<script>alert('Particular registrado con exito');</script>";
    echo "<script>window.location.href='index.php'</script>";
  }else{
    echo "<h3>Error al registrar</h3>";
    sleep(5);
    echo "<script>window.load.href='index.php'</script>";
  }
}
