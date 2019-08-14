<?php
require_once("../Modelo/Conector.php");
require_once("funcionesTabla.php");
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idcuenta,cuenta,host,username,port","cuentas","activo=true");
$cta="";
$count=0;
$tits=array("Cuenta","host","username","port");
if($res->rowCount()>0)
{
        $cta=startTable($tits);
        foreach ($res as $row) 
        {       
                $count++;
                $cta.=addRow($count);
                $cta.=addData($row['cuenta']);
                $cta.=addData($row['host']);
                $cta.=addData($row['username']);
                $cta.=addData($row['port']);
        }
        $cta.=endTable();
}
else
        $cta="";
        echo($cta);
?>