<?php
$activePage="pendientes"; 
require_once("../Modelo/Conector.php");
$card=$_POST['idcard'];
var_dump($card);
// $obj = new Conector;
// $obj->Connect();
// $obj->Editar("pendientes","fechafin=now()","idpendiente=".$idcard);
// header("Location:../Vistas/pendientes.php");