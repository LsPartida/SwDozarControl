<?php
$activePage="REPORTES";
include "plantilla.php";
?>
<div class="container" style="margin-top:2em;">
    <!-- row -->
    <div class="row">
        <!-- Inicia columan izq -->
        <div class="col-12 col-md-3">
            <div class="box">
                <div class="box-header" aria-expanded="true" data-toggle="collapse" data-target="#Vistas" onClick="$('#Vistas').collapse();">
                    Vistas
                </div>
                <div class="collapse show" id="vistas">
                    <div class="box-item" onClick="setTitulo('Sus Tickets sin resolver',1);">
                        Sus Tickets sin resolver
                    </div>
                    <div class="box-item" onClick="setTitulo('Tickets sin asignar',2);">
                        Tickets sin asignar
                    </div>
                    <div class="box-item" onClick="setTitulo('Todos los Tickets sin resolver',3);">
                        Todos los Tickets sin resolver
                    </div>
                    <div class="box-item" onClick="setTitulo('Tickets pendientes',4);">
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
                    <div class="contenido">
                    </div>
                <div >
            </div>
        </div>
        <!-- termina columnba inbox -->
    </div>
    <!-- termina row -->
    <!-- Paginación -->
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
<!-- termina container -->
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
