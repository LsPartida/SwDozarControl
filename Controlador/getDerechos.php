<?php
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
                $der.=addRow($count);
                $der.=addData($row['tipoderecho']);
        }
        $cta.=endTable();
}
else
    $der="";
?>