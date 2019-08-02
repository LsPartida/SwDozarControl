<?php

$pages = array();
$pages["menu.php"] = "Menu";
$pages["pendientes.php"] = "Pendientes";
$activePage;

?>
<style>
  nav{
    margin-bottom:2em;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="menu.php">SwDozar</a>

  
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
