<?php
require_once("../Modelo/Conector.php");
$obj = new Conector;
$obj->Connect();

$res=$obj->Consultar("idusuario,usuario,tipoderecho","usuarios inner join tipoderechos using (idtipoderecho)","usuarios.activo=true order by idusuario");
$usu="";
$count=0;
$tits=array("Nombre,Tipo de derecho");

if($res->rowCount()>0)
{
        foreach ($res as $row) 
        {       
                $usu.=addRow($count,1);
                $usu.=addData($row['usuario']);
                $usu.=addData($row['tipoderecho']);
                $count++;
        }
}
else
        $usu="";
        echo (json_encode($usu));
?>