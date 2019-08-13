<?php include "plantilla.php";
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar("idusuario,usuario","usuarios","activo=true");
$usu="";
foreach ($res as $row) 
{
    $usu .="<div class='obj d-flex' id='obj".$row['idusuario']."'><input type='checkbox' id='chk".$row['idusuario']."'><label id'lbl".$row['idusuario'].">".$row['usuario']."</label></div>";
}
$PITO="PITOTE";
?>
<div class="container">
    <div class="row">
        <div class="col" id="AquiVaElPito">

        </div>
    </div>
</div>
<script type="text/javascript">
    var marin = "<?php echo $usu?>";
    document.getElementById("AquiVaElPito").innerHTML=marin;
</script>
<?php include "final.php"?>
