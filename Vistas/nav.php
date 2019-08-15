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

<nav class="navbar navbar-expand-lg navbar-dark bg-barra">
  <a class="navbar-brand" href="menu.php">
    <img src="../imgs/dozar logo.png" height="30" class="d-inline-block align-top" alt="">SwDozar
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
    </ul>
    <form class="form my-2 my-lg-0 d-md-flex" action="../Controlador/Cerrar.php">
      <!--<img src="../imgs/user.png" alt="" class="img2Nav">&nbsp;&nbsp;-->
      <label class="lblImg d-print-flex">&nbsp;&nbsp;
      </label>
      <h4 class="username"><?php echo("".$varsession)?></h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button class="btn my-2 my-sm-0 btnNav" type="submit"></button>
    </form>
  </div>
</nav>