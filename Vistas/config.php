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
                <div class="d-flex justify-content-between">
                    <h3 class="h3config" id="Titulo">Configuraciones</h3>
                        <div class="d-flex justify-content-end" id="boton"></div>
                        
                        
                </div>
                    <div >
                        <table class="table table-hover" id="contenido">
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div> 
        </div>
        
        <!-- termina columnba inbox -->
    </div>
</div>
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
