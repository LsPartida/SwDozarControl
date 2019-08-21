<?php
$activePage="pendientes";
include "plantilla.php";
?>
<script src="../Js/Pendings.js"></script>
<body onload="cargarPendientes(<?php echo $varidsession ; ?>);">
  <div class="container" style="margin-top:2em;"> 
    <div class="row">
      <div class="col-12 col-md-4">
        <h3>Pendientes globales</h3>
        <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
          <div class="border-bottom row pendiv">
            <button class="btn st-btns" data-toggle="modal" data-target="#exampleModal" onclick="setTipo(1);">
            <img src="../imgs/mas.png" class="img-fluid btnIPen" alt="Agregar" />
            </button>
            <label class="penLab">Agregar Pendiente</label>
          </div>
          <div id="contglob"></div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <h3>Prioridad Alta</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
            <div class="border-bottom row pendiv">
            <button class="btn st-btns" data-toggle="modal" data-target="#exampleModal" onclick="setTipo(2);">
            <img src="../imgs/mas.png" class="img-fluid btnIPen" alt="Agregar" />
            </button>
              <label class="penLab">Agregar Pendiente</label>
            </div>
            <div id="contalt"></div>
          </div>
      </div>
      <div class="col-12 col-md-4">
          <h3>Prioridad Normal</h3>
          <div class="container-fluid d-flex flex-column overflow-auto columna shadow">
            <div class="border-bottom row pendiv">
            <button class="btn st-btns" data-toggle="modal" data-target="#exampleModal" onclick="setTipo(3);">
            <img src="../imgs/mas.png" class="img-fluid btnIPen" alt="Agregar" />
            </button>
              <label class="penLab">Agregar Pendiente</label>
            </div>
            <div id="contbaj"></div>
          </div>
      </div>  
    </div>
  </div>
<!---------------------------------------------Modal----------------------------------------------->
<div class="modal" id="exampleModal" tabindex="-1" role="dialog aria-labelledby="exampleModalLabel" aria-hidden="true"">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"><!--empieza header del modal-->
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Pendiente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--Termina header del modal-->
      <div class="modal-body"><!--empieza cuerpo del modal-->
        <div class="row">
          <div class="col d-flex">
            <p>Seleccione el tipo de pendiente &nbsp;</p><p id="tipo"></p>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-3">
            <input type="image" src="../imgs/b1.png" class="modalbtn rounded" data-toggle="modal" data-target="#exampleMod" name="msiva" onclick="$('#exampleModal').modal('hide');"> 
          </div>
          <div class="col-3">
            <input type="image" onclick="setApp(2);" src="../imgs/b2.png" class="modalbtn rounded" name="erpdoz">
          </div>
          <div class="col-3">
            <input type="image" onclick="setApp(3);" src="../imgs/b3.png" class="modalbtn rounded" name="cfdilite">
          </div>
          <div class="col-3">
            <input type="image" onclick="setApp(4);" src="../imgs/b4.png" class="modalbtn rounded" name="otros">
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

<!---------------------------------------------Modal----------------------------------------------->
<!---------------------------------------------Modal----------------------------------------------->
<div class="modal" id="editModal" tabindex="-1" role="dialog aria-labelledby="exampleModalLabel" aria-hidden="true"">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"><!--empieza header del modal-->
        <h5 class="modal-title" id="pendingtitle">Agregar Nuevo Pendiente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div><!--Termina header del modal-->
      <div class="modal-body"><!--empieza cuerpo del modal-->
        <div class="row">
          <div class="col">
          <form id="formedit" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Titulo</label>
                        <input type="Text" class="form-control" id="Tituloform" placeholder="Titulo" name="Titulo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Empresa</label>
                        <input  type="text" class="form-control" id="Empresa" placeholder="Empresa" name="Empresa">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
                    </div>
                </div>
                <button id="pendingbtn" type="submit" class="btn btn-primary">Agregar</button>
            </form>
          </div>
        </div>
      </div><!--Termina cuerpo del modal-->
    </div>
  </div>
</div>
<!---------------------------------------------Modal----------------------------------------------->
    <script src="../Js/addPending.js"></script>
   <script src="../Js/Pendings.js"></script> 

<form hidden action="../vistas/pendientedetalle.php" method="post" id="form">
  <input type="text" name="ID" id="ID">
  <input type="text" name="app" id="app">
  <input type="text" name="tipo" id="tipopend">
</form>
   
<?php include "final.php"; ?>


   