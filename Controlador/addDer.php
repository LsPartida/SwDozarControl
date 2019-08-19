<?php
require_once("../Modelo/Conector.php");
$varidsession=$_SESSION['ID'];
$tipo=$_POST['tipoder'];
$obj = new Conector;
$obj->Connect();
$obj->Agregar('tipoderechos',null,"0,'".$tipo."',true,now(),now(),".$varidsession.",".$varidsession);
header("Location:../vistas/config.php");
// $obj->Agregar('pendientes',"idpendiente,idusuario,tipopendiente","0,1,1");
?>