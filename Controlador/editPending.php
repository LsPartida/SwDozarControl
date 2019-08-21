<?php
$empresa=$_POST['Empresa'];
$desc=$_POST['descripcion'];
$titulo=$_POST['Titulo'];
$idcard=$_POST['idcard'];
$activePage="pendientes"; 
require_once("../Modelo/Conector.php");
// var_dump($card);
$obj = new Conector;
$obj->Connect();
$sql="TITULO='".$titulo."',EMPRESA='".$empresa."',DESCRIPCION='".$desc."'";
$obj->Editar("pendientesdetalle",$sql,"idpendiente=".$idcard);
header("Location:../Vistas/pendientes.php");
?>