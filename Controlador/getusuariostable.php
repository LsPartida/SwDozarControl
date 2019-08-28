<?php
require_once("../Modelo/Conector.php");
require_once("funcionesTabla.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idusuario,usuario","usuarios","activo=true");
$usu="";
$count=0;
$tits=array("Nombre","Derechos");
if($res->rowCount()>0)
{
        $usu=startTable($tits);
        foreach ($res as $row) 
        {       
                $count++;
                $usu.=addRow($count,$row['idusuario']);
                $usu.=addData($row['usuario']);
        }
        $usu.=endTable();
}
else
        $usu="";
        echo ($usu);
?>


