<?php
$activePage="pendientes"; 
require_once("../Modelo/Conector.php");
$card=$_POST['idcard'];
$condi=$_POST['cond'];
// var_dump($card);
$obj = new Conector;
$obj->Connect();
$obj->Editar("pendientes",$condi,"idpendiente=".$card);
header("Location:../Vistas/pendientes.php");
?>