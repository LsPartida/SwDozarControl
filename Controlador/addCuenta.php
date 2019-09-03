<?php
require_once("../Modelo/Conector.php");
$idcuenta=$_POST['IDCUENTA'];
$cuenta=$_POST['CUENTA'];
$host=$_POST['HOST'];
$username=$_POST['USERNAME'];
$pass=$_POST['PASS'];
$port=$_POST['PORT'];
$obj = new Conector;
$obj->Connect();
$obj->Agregar('cuentas',null,"");
header("Location:../vistas/config.php");
// $obj->Agregar('pendientes',"idpendiente,idusuario,tipopendiente","0,1,1");
?>