<?php
$server='localhost';
$user='root';
$dbpass='1qazxsw2.-';
$dbname='SWDControl';
$conn;
$result;
unset($conn);
unset($result);
function conectar()
{
    global $server,$user,$dbpass,$dbname,$conn;
    // Conectar a la bd
    $conn = mysqli_connect($server, $user, $dbpass, $dbname);
    // Check connection
    if (!$conn) {
    echo "error";
    die("Connection failed: " . mysqli_connect_error());
    }
}
function ejecutar($sql)
{
    global $conn;
    // var_dump($conn);
    conectar();
    return mysqli_query($conn, $sql);
}
function cerrar()
{
    $conn.close();
}
function iniciar(){
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
$link.close();
}
?>