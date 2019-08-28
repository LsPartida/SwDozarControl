<?php
require_once("../Modelo/Conector.php");
require_once("funcionesTabla.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idtipoderecho,tipoderecho","tipoderechos","activo=true");
$der="";
$count=0;
$tits=array("Tipo de derecho");
if($res->rowCount()>0)
{
    $der=startTable($tits);
    foreach ($res as $row) 
        {       
                $count++;
                $der.=addRow($count,$row['idtipoderecho']);
                $der.=addData($row['tipoderecho']);
        }
        $der.=endTable();
}
else
    $der="";
    echo($der);
?>