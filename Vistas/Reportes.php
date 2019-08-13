<?php
$activePage="REPORTES";
include "plantilla.php";
?>
<div class="container" style="margin-top:2em;">
    <div class="row">
        <!-- Inicia columan izq -->
        <div class="col-12 col-md-3">
            <div class="box">
                <div class="box-header" aria-expanded="true" data-toggle="collapse" data-target="#Vistas" onClick="$('.collapse').collapse();">
                    Vistas
                </div>
                <div class="collapse show" id="vistas">
                    <div class="box-item" onClick="setTitulo('Sus Tickets sin resolver');">
                        Sus Tickets sin resolver
                    </div>
                    <div class="box-item" onClick="setTitulo('Tickets sin asignar');">
                        Tickets sin asignar
                    </div>
                    <div class="box-item" onClick="setTitulo('Todos los Tickets sin resolver');">
                        Todos los Tickets sin resolver
                    </div>
                    <div class="box-item" onClick="setTitulo('Tickets pendientes');">
                        Tickets pendientes
                    </div>
                </div>
            </div>
        </div>
        <!-- termina columna izq -->
        <!-- inicia columan inbox -->
        <div class="col-12 col-md-9">
            <div class="box bg-white">
                <div class="box-header border-top border-primary itembox" >
                    <h3 id="Titulo">Sus Tickets sin resolver</h3>
                </div>
            </div>
        </div>
        <!-- termina columnba inbox -->
    </div>
</div>
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
