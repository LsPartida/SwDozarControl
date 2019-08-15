<?php
$activePage="config";
include "plantilla.php";
?>
<div class="container" style="margin-top:2em;">
    <div class="row">
        <!-- Inicia columan izq -->
        <div class="col-12 col-md-3">
            <div class="box">
                <div class="box-header" aria-expanded="true" data-toggle="collapse" data-target="#Vistas" onClick="$('#Vistas').collapse();">
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
                        <table class="table table-hover" id="contenido">
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
            </div>
        </div>
        <!-- termina columnba inbox -->
    </div>
</div>
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
