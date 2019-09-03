<?php
require_once("../Modelo/Conector.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idusuario,usuario,tipoderecho","usuarios inner join tipoderechos using (idtipoderecho)","usuarios.activo=true order by idusuario");
$usu="";
$count=0;
if($res->rowCount()>0)
        $usu=$res->fetchAll();
else
        $usu="";
echo (json_encode($usu));
?>


