<?php
$activePage="pendientes"; 
require_once("../Modelo/Conector.php");
$varidsession=$_SESSION['ID'];
$id=$_POST['ID'];
$app=$_POST['app'];  
$tipo=$_POST['tipo'];
$titulo=$_POST['Titulo'];  
$empresa=$_POST['Empresa'];
$desc=$_POST['descripcion'];
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("MAX(idpendiente)+1 as idpendiente","pendientes",null);
$idpend;
foreach ($res as $row) 
    {
        if(isset($row['idpendiente']))
            $idpend=$row['idpendiente'];
        else
            $idpend=1;
    }
var_dump($idpend);
$obj->Agregar('pendientes',"idpendiente,idusuario,tipopendiente,idapp",$idpend.",".$varidsession.",".$tipo.",".$app);
$obj->Agregar('pendientesdetalle',"idpendientedetalle,idpendiente,titulo,descripcion,empresa","0,".$idpend.",'".$titulo."','".$desc."','".$empresa."'");
// $obj->Agregar('pendientes',"idpendiente,idusuario,tipopendiente","0,1,1");
?>