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
<!-------------------------------------Modal #1 para Usuarios--------------------------------------------->
<div class="modal" id="ModalAddUsu" tabindex="-1" role="dialog aria-labelledby="exampleModalLabel" aria-hidden="true"">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><!--empieza header del modal-->
                <h5 class="modal-title" id="exampleModalLabel">Agregar un Usuario Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!--Termina header del modal-->
            <div class="modal-body"><!--empieza cuerpo del modal-->
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Nombre de usuario:</label>
                    </div>
                    <div class="col-6">
                        <label>Selecciona Derechos:</label>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                    <div class="col-6">
                        <select>
                            <option value="Op1">Op1</option>
                            <option value="Op2">Op2</option>
                            <option value="Op3">Op3</option>
                            <option value="Op4">ESKEEEEELEEEERRR</option>
                        </select>
                    </div>
                </div>
            </div><!--Termina cuerpo del modal-->
            <div class="modal-footer"><!--empieza footer del modal-->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!--------------------------------------------Termina modal 1------------------------------------------->
<!------------------------------------------Modal #2 para Usuarios-------------------------------------->
<div class="modal" id="ModalAddDer" tabindex="-1" role="dialog aria-labelledby="exampleModalLabel" aria-hidden="true"">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><!--empieza header del modal-->
                <h5 class="modal-title" id="exampleModalLabel">Agregar Derecho Nuevo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!--Termina header del modal-->
            <div class="modal-body"><!--empieza cuerpo del modal-->
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Nombre de derecho:</label>
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                </div>
            </div><!--Termina cuerpo del modal-->
            <div class="modal-footer"><!--empieza footer del modal-->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------Termina modal 2-------------------------------------------->
<!-------------------------------------Modal #3 para Usuarios---------------------------------------->
<div class="modal" id="ModalAddCuenta" tabindex="-1" role="dialog aria-labelledby="exampleModalLabel" aria-hidden="true"">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header"><!--empieza header del modal-->
                <h5 class="modal-title" id="exampleModalLabel">Agregar un Cuenta Nueva</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div><!--Termina header del modal-->
            <div class="modal-body"><!--empieza cuerpo del modal-->
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Nombre de cuenta:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Host:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Nombre de Usuario:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Contraseña:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                </div>
                <div class="row d-flex">
                    <div class="col-6">
                        <label>Puerto:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" class="modalbtn rounded" name="cfdilite">
                    </div>
                </div>
            </div><!--Termina cuerpo del modal-->
            <div class="modal-footer"><!--empieza footer del modal-->
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------Termina modal 3-------------------------------------------->
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
