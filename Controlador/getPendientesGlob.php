<?php
require_once("../Modelo/Conector.php");
require_once("funcionesCard.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"pendientes inner join pendientesdetalle using(idpendiente)","TIPOPENDIENTE=3 and FECHAFIN IS NULL");

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