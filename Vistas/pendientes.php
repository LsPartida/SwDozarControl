<?php
$activePage="pendientes";
include "plantilla.php";
?>
  <div class="container" style="margin-top:2em;"> 
    <div class="row">
      <div class="col-12 col-md-4">
        <h3>Pendientes globales</h3>
        <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <div class="border-bottom row pendiv">
            <button class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid btnIPen" alt="Agregar" /></button>
            <label class="penLab">Agregar Pendiente</label>
          </div>
          <?php
            include "..\Controlador\getPendientesGlob.php";
          ?>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <h3>Prioridad Alta</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
            <div class="border-bottom row pendiv">
              <button class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid btnIPen" alt="Agregar" /></button>
              <label class="penLab">Agregar Pendiente</label>
            </div>
            <?php
              include "..\Controlador\getPendientesGlob.php";
            ?>
          </div>
      </div>
      <div class="col-12 col-md-4">
          <h3>Prioridad Normal</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
            <div class="border-bottom row pendiv">
              <button class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid btnIPen" alt="Agregar" /></button>
              <label class="penLab">Agregar Pendiente</label>
            </div>
            <?php
              include "..\Controlador\getPendientesGlob.php";
            ?>
          </div>
      </div>  
    </div>
    </div>
    <?php include "final.php" ?>