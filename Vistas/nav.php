<?php
$varsession=$_SESSION['usuario'];
$varidsession=$_SESSION['ID'];
$pages = array();
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("RUTA,MODULO","USUARIOS INNER JOIN TIPODERECHOS USING (IDTIPODERECHO)INNER JOIN DERECHOS USING(IDTIPODERECHO) INNER JOIN MODULOS USING(IDMODULO)","IDUSUARIO=".$_SESSION['ID']);
foreach ($res as $row) 
{
    $pages[$row['RUTA'].".php"] = $row['MODULO'];
}
// $pages["menu.php"] = "Menu";
// $pages["pendientes.php"] = "Pendientes";
// $pages["Configuracion.php"] = "Configuración";
// $pages["gestcuentas.php"] = "Gestionar Correos";
// $pages["formTickets.php"] = "Reportes";
// $pages["pruebas.php"] = "Gestionar Correos";
$activePage;
if (!isset($_SESSION['usuario']))
  {
    echo("no hay usuario".$varsession);
    // header("location:../index.php");
    die();
  }
  // var_dump($pages);
?>

<nav class="navbar navbar-expand-lg navbar-light bg-barra">
  <a class="navbar-brand" href="<?php echo($row['RUTA']); ?>.php">
    <img src="../imgs/dozar logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SwDozar
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
    <?php foreach($pages as $url=>$title):?>
       <a class="nav-link cambiar 
       <?php if($url === $activePage):?>active<?php endif;?>"
       href="<?php echo $url;?>"href="#">
         <?php echo $title;?>
      </a>
      <?php endforeach;?>
</li>
        <!-- <a class="nav-link " href="#">Pendientes</a> -->
      <!-- <li class="nav-item"> -->
        <!-- <a class="nav-link" href="#">Reportes</a> -->
      <!-- </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0"> -->
    <div class="d-lg-flex space-evenly">
      <h4 class="username"><?php echo("".$varsession)?></h4>
      <a href="..\Controlador\Cerrar.php">Cerrar sesión</a>
    </div>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    <!-- </form> -->
  </div>
</nav>
