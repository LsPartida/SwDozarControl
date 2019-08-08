<!DOCTYPE html>
<?php
$activePage="menu.php";
?>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosnigas.css">
    <title>SWDozar</title>
</head>
<body>
<?php include "nav.php";
?>
<?php
if($varsession == null || $varsession='')
{?>
      <div class="container">
        <div class="row">
            <div class="col-12 bg-secondary">
                <h2>Usted no ha iniciado sesión</h2>
            </div>
        </div>
      </div>
    </body>
<?php
die();
}
?>
    <div class="container">
        <div class="row">
            <div class="col mb-4 shadow-sm">
                <div class="col-mb-4">
                    <h2>boton 1</h2>
                    <p>Prueba de vista boton 1</p>
                </div>
            </div>
            <div class="col mb-4 shadow-sm">
                <div class="col-mb-4">
                    <h2>boton 2</h2>
                    <p>Estamos probando la vista de los botones y la cantidad de cosas que le caben dentro para ver que tan grande se hace o que tanto restringe</p>
                    <p>Podemos concluir que los botones crecen hasta donde su contenido lo indique</p>
                </div>
            </div>
            <div class="col mb-4 shadow-sm">
                <div class="col-mb-4">
                    <h2>boton 3</h2>
                    <p>Prueba de vista boton 3</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>