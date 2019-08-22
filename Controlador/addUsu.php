<?php
require_once("../Modelo/Conector.php");
$varidsession=$_SESSION['ID'];
$tipo=$_POST['tipoder'];
$obj = new Conector;
$obj->Connect();
$obj->Agregar('usuarios',"idusuario,idtipoderecho,usuario,usumodi",);
header("Location:../vistas/config.php");
// $obj->Agregar('pendientes',"idpendiente,idusuario,tipopendiente","0,1,1");
?>