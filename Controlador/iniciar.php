<?php
require_once("..\Modelo\Conector.php");
$obj = new Conector;
$obj->Connect();
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$res=$obj->Consultar("idusuario","usuarios","usuario='".$usuario."' and pass='".$pass."'");
if($res->rowCount() >0)
{
    foreach ($res as $row) 
    {
        $idusuario=$row['idusuario'];
    }
}
    else
        header('location:../index.php');
if($idusuario != null)
{
    $varsesion=$_SESSION['usuario'] = $usuario;
    $varidsesion=$_SESSION['ID'] = $idusuario;
    // var_dump($varsesion);
    // var_dump($varidsesion);
    header('location:..\Vistas\menu.php');
    die();
}
?>