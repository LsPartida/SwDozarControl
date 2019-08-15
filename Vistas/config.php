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
<div class="modal fade" id="ModalAddUsu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
    </div>
</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
    </div>
    </div>
  </div>
</div>
<script src="../Js/mailbox.js"></script>
<?php include "final.php" ?>
