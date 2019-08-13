<?php
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idcuenta,cuenta,host,username,port","cuentas","activo=true");
$fin="</div>";
foreach ($res as $row) 
{
        $cta ="<div class='obj d-flex' id='obj".$row['idcuenta']."'><input type='checkbox' id='chk".$row['idcuenta']."'>
        <label id'lbl".$row['idcuenta'].">".$row['cuenta']."</label>
        <label id'lblh".$row['idcuenta'].">".$row['host']."</label>
        <label id'lblu".$row['idcuenta'].">".$row['username']."</label>
        <label id'lblp".$row['idcuenta'].">".$row['port']."</label>>/div>";
}
?>