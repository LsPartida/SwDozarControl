<?php
session_start();
$usuario=$_POST['usuario'];
// error_reporting(0);
$pass=$_POST['pass'];
$server='localhost';
$user='root';
$dbpass='1qazxsw2.-';
$dbname='SWDControl';
// Conectar a la bd
$conn = mysqli_connect($server, $user, $dbpass, $dbname);
// Check connection
if (!$conn) {
    echo "error";
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT idusuario FROM usuarios WHERE '$usuario'=USUARIO AND '$pass'=pass";
$result = mysqli_query($conn, $sql);
// echo (mysqli_error($conn));
$aux = mysqli_fetch_object($result);
if($aux->msqli_rows_count>0)
    $aux->idusuario;
else
    header('location:index.php');
if($aux != null)
{
    $varsesion=$_SESSION['usuario'] = $usuario;
    header('location:menu.php');
    die();
}
?>