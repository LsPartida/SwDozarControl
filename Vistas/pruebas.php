<?php 
include "plantilla.php";
?>
<form>
            <div class="modal-body"><!--empieza cuerpo del modal-->
            <div class="container">
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Nombre de derecho:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" id="tipoder">
                    </div>
                </div>
                <div class="row d-flex  mt-3">
                    <div class="col-6">
                        <h3>Permisos</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        Pendientes
                    </div>
                    <div class="col">
                    <input type="checkbox" id="chkpend">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        Configuración
                    </div>
                    <div class="col">
                    <input type="checkbox" id="chkconf">
                    </div>
                </div>
                <div class="row">
                    <div class="col-5">
                        Reportes
                    </div>
                    <div class="col">
                    <input type="checkbox" id="chkrep">
                    </div>
                </div>
            </div>
            </div><!--Termina cuerpo del modal-->
            <div class="modal-footer"><!--empieza footer del modal-->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" onclick="addder()" return=false>Agregar</button>
            </div>
            </form>
            <script src="../Js/mailbox.js"></script>
<?php 
include "final.php";
?>