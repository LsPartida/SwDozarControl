<?php
include "plantilla.php";
include "../Controlador/funcionesTabla.php";
include "..\Controlador\getusuarios.php";
include "..\Controlador\getCuentas.php";
include "..\Controlador\getDerechos.php";
?>
<div class="container" style="margin-top:2em;">
    <div class="row">
        <!-- Inicia columan izq -->
        <div class="col-12 col-md-3">
            <div class="box">
                <div class="box-header" aria-expanded="true" data-toggle="collapse" data-target="#Vistas" onClick="$('.collapse').collapse();">
                    Configuraciones
                </div>
                <div class="collapse show" id="vistas">
                    <div class="box-item" onClick="setTitulo('Configuración de Usuarios',1);">
                        Configuración de Usuarios
                    </div>
                    <div class="box-item" onClick="setTitulo('Configuración de derechos',2);">
                        Configuración de Derechos
                    </div>
                    <div class="box-item" onClick="setTitulo('Configuración de cuentas',3);">
                        Configuración de Cuentas
                    </div>
                    <div class="box-item" onClick="setTitulo('Tickets pendientes');">
                    </div>
                </div>
            </div>
        </div>
        <!-- termina columna izq -->
        <!-- inicia columan inbox -->
        <div class="col-12 col-md-9">
            <div class="box bg-white">
                <div class="box-header border-top border-primary itembox" >
                    <h3 class="h3config" id="Titulo">Configuraciones</h3>
                    <div >
                        <table class="table table-striped" id="contenido">
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- termina columnba inbox -->
    </div>
</div>
<script type="text/javascript">
function setTitulo(tit,tipo) 
{
  document.getElementById("Titulo").innerHTML = tit;
  addContr(tipo);
}
function addContr(tipo)
{
    var datos="";
    var campo = document.getElementById("contenido");
    if(tipo==1)
    {
        datos="<?php echo $usu?>";
    }
    if(tipo==2)
    {
        datos="<?php echo $der?>";
    }
    if(tipo==3)
    {
        datos="<?php echo $cta?>";
    }
    campo.innerHTML=null;
    campo.innerHTML=datos;
}
</script>
<?php include "final.php" ?>
