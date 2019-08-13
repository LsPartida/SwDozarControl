<?php
$activePage="pendientes";
include "plantilla.php";
?>
   <div class="container" style="margin-top:2em;"> 
      <div class="row">
      <div class="col-12 col-md-4">
        <h3>
          Pendientes globales
        </h3>
        <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <div class="border-bottom">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick=setTipo(1)>
  Launch demo modal
</button>
          </div>
        <?php
          include "..\Controlador\getPendientesGlob.php";
          ?>
        </div>
      </div>
      <div class="col-12 col-md-4">
          
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
            asd
          <!-- Agregar botón -->
          </div>
      </div>
      <div class="col-12 col-md-4">
          <h3>Prioridad Normal</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <!-- Agregar botón -->
          </div>
      </div>  
    </div>
  </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <h4>Seleccione el tipo de pendiente &nbsp;</h4><h4 id="tipo"></h4>
        </div>
        <div class="row d-flex">
        <div class="col-3">
            <input type="image" src="../imgs/b1.png" class="modalbtn rounded" name="msiva">
          </div>
          <div class="col-3">
            <input type="image" src="../imgs/b2.png" class="modalbtn rounded" name="erpdoz">
          </div>
          <div class="col-3">
            <input type="image" src="../imgs/b3.png" class="modalbtn rounded" name="cfdilite">
          </div>
          <div class="col-3">
            <input type="image" src="../imgs/b4.png" class="modalbtn rounded" name="otros">
          </div>
    </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
  
  
    <script src="../Js/addPending.js"></script>
    <?php include "final.php" ?>


   