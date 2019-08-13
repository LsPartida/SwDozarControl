<?php
include "plantilla.php";
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
                    <h3 class="h3config" id="Titulo">Configuraciones</h3>
                    
                </div>
            </div>
        </div>
        <!-- termina columnba inbox -->
    </div>
</div>
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
