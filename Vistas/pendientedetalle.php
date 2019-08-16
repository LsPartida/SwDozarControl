<?php
    include "Plantilla.php";
    $id=$_POST['ID'];
    $app=$_POST['app'];  
    $tipo=$_POST['tipo'];
?>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="../controlador/addPending.php" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Titulo</label>
                        <input type="Text" class="form-control" id="Titulo" placeholder="Titulo" name="Titulo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Empresa</label>
                        <input type="text" class="form-control" id="Empresa" placeholder="Empresa" name="Empresa">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="exampleFormControlTextarea1">Descripcion</label>
                        <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
                    </div>
                </div>
                <input hidden type="text" name="ID" id="ID" value=<?php echo $id;?>>
                <input hidden type="text" name="app" id="app" value=<?php echo $app;?>>
                <input hidden type="text" name="tipo" id="tipo" value=<?php echo $tipo;?>>
                <button type="submit" class="btn btn-primary">Agregar</button>
            </form>
        </div>
    </div>
<?php
    include "final.php";
?>