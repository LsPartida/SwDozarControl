<?php
require_once("../Modelo/Conector.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"usuarios","activo=true");
$usu=array();
if($res->rowCount()>0)
{
        foreach ($res as $row) 
        {       
                array_push($usu,$row);
                // $usu.=
        }
}
else
        $usu="";
        echo (json_encode($usu));
?>


