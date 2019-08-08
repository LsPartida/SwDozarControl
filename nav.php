<?php
session_start();
$varsession=$_SESSION['usuario'];
$pages = array();
$pages["menu.php"] = "Menu";
$pages["pendientes.php"] = "Pendientes";
$pages["Configuracion.php"] = "Configuración";
$activePage;

?>
<style>
  nav{
    margin-bottom:2em;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="menu.php">
    <img src="./imgs/dozar logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
    SwDozar
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php foreach($pages as $url=>$title):?>
       <a class="nav-link
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
      <a href="cerrar.php">Cerrar sesión</a>
    </div>
      <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
    <!-- </form> -->
  </div>
</nav>
