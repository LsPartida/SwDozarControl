<?php
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("RUTA,RUTAIMG","USUARIOS INNER JOIN TIPODERECHOS USING (IDTIPODERECHO)INNER JOIN DERECHOS USING(IDTIPODERECHO) INNER JOIN MODULOS USING(IDMODULO)","IDUSUARIO=".$_SESSION['ID']);
foreach ($res as $row) 
{
    $ruta="../".$row['RUTAIMG']; 
    $pages["menu.php"] = "Menu";
    ?>
    <div class="col-4">
        <img class=" img-fluid" src="<?php echo($ruta); ?>" alt="">
    </div>
    <?php
}
$obj->Close();
?>
