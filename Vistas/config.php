<?php
include "plantilla.php";
include "../Controlador/getusuarios.php";
// include "../Controlador/getCuentas.php";
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
                    <div class="box-item" onClick="setTitulo('Configuración de Usuarios');">
                        Configuración de Usuarios
                    </div>
                    <div class="box-item" onClick="setTitulo('Configuración de derechos');">
                        Configuración de Derechos
                    </div>
                    <div class="box-item" onClick="setTitulo('Configuración de cuentas');">
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
                <div class="box-header border-top border-primary" >
                    <h3 id="Titulo">Sus Tickets sin resolver</h3>
                </div>
                <div id="contenidoelementos">
                    asda
                </div>
            </div>
        </div>
        <!-- termina columna inbox -->
    </div>
</div>
<script type="text/javascript">
function setTitulo(tit) 
{
  document.getElementById("Titulo").innerHTML = tit;
  if(tit==="Configuración de Usuarios")
  {
      datos = "<?php echo$usu?>";
      alert(datos);
    document.getElementById("contenidoelementos").innerHTML=datos;
  }
  if(tit==="Configuración de Derechos")
  {
    datos = "<?php echo$der?>";
    document.getElementById("contenidoelementos").innerHTML=datos;
  }
  if(tit==="Configuración de Cuentas")
  {
    datos = "<?php echo$cta?>";
    document.getElementById("contenidoelementos").innerHTML=datos;
  }
}
</script>
<?php include "final.php"?>
