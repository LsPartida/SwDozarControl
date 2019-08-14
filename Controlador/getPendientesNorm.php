<?php
require_once("../Modelo/Conector.php");
require_once("funcionesCard.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"pendientes inner join pendientesdetalle using(idpendiente)","TIPOPENDIENTE=1 and FECHAFIN IS NULL and idusuario=".$varidsession);
$cards="";
foreach ($res as $row) 
{
    // var_dump($row);
    $cards=createCard($row['IDUSUARIO'],$row['TITULO'],$row['DESCRIPCION']);
    // var_dump($cards);
}
echo($cards);
$obj->Close();
?>