<?php
require_once("../Modelo/Conector.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"pendientes inner join pendientesdetalle using(idpendiente)","TIPOPENDIENTE=3 and FECHAFIN IS NULL");
$rows=$res->fetchAll(\PDO::FETCH_OBJ);
echo (json_encode($rows));