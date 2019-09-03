<?php
require_once("../Modelo/Conector.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idtipoderecho,tipoderecho","tipoderechos","activo=true order by idtipoderecho");
$usu="";
$count=0;
if($res->rowCount()>0)
        $usu=$res->fetchAll();
else
        $usu="";
echo (json_encode($usu));
?>


