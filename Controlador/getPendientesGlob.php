<?php
require_once("../Modelo/Conector.php");
require_once("funcionesCard.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"pendientes inner join pendientesdetalle using(idpendiente)","TIPOPENDIENTE=1 and FECHAFIN IS NULL");

$cards="";
foreach ($res as $row) 
{
    // var_dump($row);
    $cards.=createCard($row['IDPENDIENTE'],$row['IDUSUARIO'],$row['TITULO'],$row['DESCRIPCION'],$row['IDAPP']);
    // var_dump($cards);
}
echo($cards);
$obj->Close();
?>