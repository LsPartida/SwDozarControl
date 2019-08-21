<?php
require_once("../Modelo/Conector.php");
require_once("funcionesCard.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"pendientes inner join pendientesdetalle using(idpendiente)","TIPOPENDIENTE=3 and FECHAFIN IS NULL and idusuario=".$_SESSION['ID']);
$cards="";
foreach ($res as $row) 
{
    // var_dump($row);
    $cards.=createCard($row['IDPENDIENTE'],$row['IDUSUARIO'],$row['TITULO'],$row['DESCRIPCION'],$row['IDAPP'],$row['EMPRESA']);
    // var_dump($cards);
}
echo($cards);
$obj->Close();
?>