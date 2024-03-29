<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosnigas.css">
    <title>SwDozar</title>
  </head>
  <?php
  
  session_start();
    if (isset($_SESSION['usuario']))
  {
    header("location:Vistas\pendientes.php");
    die();
  }
  //Si no hay usuarios, crear admin admin y montar info de modulos
  ?>
  <body>
    <form class="form-signin" action="Controlador\iniciar.php" method="POST">
  		<img class="mb-4 logo" src="imgs/dozar logo.png" alt="" width="100" height="100" margin>
  		<h1 class="h3 mb-3 font-weight-normal">Por favor inicia sesión</h1>
  		<label for="inputEmail" class="sr-only">Correo Electronico</label>
  		<input type="text" id="inputUN" class="form-control" placeholder="Nombre de usuario" required autofocus name="usuario">
  		<label for="inputPassword" class="sr-only">Contraseña</label>
  		<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required name="pass">
  		<div class="checkbox mb-3">
    		<label>
      			<input type="checkbox" value="remember-me"> Recordarme
    		</label>
  		</div>
  		<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
  		<p class="mt-5 mb-3 text-muted">SWDozar Soluciones ERP</p>
	</form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>