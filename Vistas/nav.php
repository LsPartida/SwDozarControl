<?php
$varsession=$_SESSION['usuario'];
$varidsession=$_SESSION['ID'];

$pages = array();
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("RUTA,MODULO","USUARIOS INNER JOIN TIPODERECHOS USING (IDTIPODERECHO)INNER JOIN DERECHOS USING(IDTIPODERECHO) INNER JOIN MODULOS USING(IDMODULO)","IDUSUARIO=".$_SESSION['ID']);
if (!isset($_SESSION['usuario']))
  {
    echo("no hay usuario".$varsession);
    // header("location:../index.php");
    die();
  }
?>

<nav class="navbar navbar-expand-md navbar-dark bg-barra">
  <a class="navbar-brand" href="menu.php">
    <img src="../imgs/dozar logo.png" height="30" class="d-inline-block align-top" alt="">
    SwDozar
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ">
      <?php
      foreach($res as $row)
      {
        echo('<a class="nav-link cambiar ');
        if(strtoupper($activePage)==$row['RUTA'])
        {
          echo('active');
        }
        echo('" ');
        echo("href=".$row['RUTA'].".php>".$row['MODULO']."</a>");
      }
      ?>
        <!-- <a class="nav-link " href="#">Pendientes</a> -->
      <!-- <li class="nav-item"> -->
        <!-- <a class="nav-link" href="#">Reportes</a> -->
      <!-- </li> -->
    </ul>
    <!-- <form class="form-inline my-2 my-md-0"> -->
    <div class="d-lg-flex space-evenly ">
        <!--<img src="../imgs/user.png" alt="" class="img2Nav">-->
        <h4 class="username"><?php echo("".$varsession)?></h4>&nbsp&nbsp
          <a href="..\Controlador\Cerrar.php" class="nava">
            <img src="../imgs/logout.png" alt="logout" class="imgNav"/>
          </a>
    </div>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    <!-- </form> -->
  </div>
</nav>
