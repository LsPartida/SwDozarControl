<?php
require_once("../Modelo/Conector.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idtipoderecho,tipoderecho","tipoderechos","activo=true");
$aux=array();
if($res->rowCount()>0)
{
    foreach ($res as $row) 
        {       
            array_push($aux,$row['tipoderecho']);
        }
}    
echo (json_encode($aux));
?>
