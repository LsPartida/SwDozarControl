<?php
require_once("../Modelo/Conector.php");
$varidsession=$_SESSION['ID'];
$tipo=$_POST['derechos'];
$usuario=$_POST['name'];
$pass=$_POST['pass'];
var_dump($tipo);
$obj = new Conector;
$obj->Connect();
$obj->Agregar('usuarios',null,"0,".$tipo.",'".$usuario."','".$pass."',1,now(),now(),".$varidsession.",".$varidsession);
header("Location:../vistas/config.php");
// $obj->Agregar('pendientes',"idpendiente,idusuario,tipopendiente","0,1,1");
?>