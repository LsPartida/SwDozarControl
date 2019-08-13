<!doctype html>
<?php
$activePage="pendientes.php";
?>
<html lang="en">
   <?php include "plantilla.php";?>
   <div class="container" style="margin-top:2em;"> 
      <div class="row">
      <div class="col-12 col-md-4">
        <h3>
          Pendientes globales
        </h3>
        <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <button>Agregar</button>
        <?php include "..\Controlador\getPendientesGlob.php"; ?>
        </div>
      </div>
      <div class="col-12 col-md-4">
          <h3>Prioridad Alta</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <!-- Agregar botón -->
          <?php include "..\Controlador\getPendientesAlt.php"; ?>
          </div>
      </div>
      <div class="col-12 col-md-4">
          <h3>Prioridad Normal</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <!-- Agregar botón -->
          <?php include "..\Controlador\getPendientesNor.php"; ?>
          </div>
      </div>  
    </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="Js\puchas.js"></script>
  </body>
</html>