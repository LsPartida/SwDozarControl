<?php
require_once("../Modelo/Conector.php");
require_once("funcionesTabla.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"reportes","estatus <> 3 and idusuario=".$varidsession);
$cards="";
foreach ($res as $row) 
{
    // var_dump($row);
    // var_dump($cards);
}
echo($cards);
$obj->Close();
?>