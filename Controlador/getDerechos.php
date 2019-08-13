<?php
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idtipoderecho,tipoderecho","tipoderechos","activo=true");
$fin="</div>";
foreach ($res as $row) 
{
        $der ="<div class='obj d-flex' id='obj".$row['idtipoderecho']."'><input type='checkbox' id='chk".$row['idtipoderecho']."'><label id'lbl".$row['idtipoderecho'].">".$row['tipoderecho']."</label></div>";
}
?>