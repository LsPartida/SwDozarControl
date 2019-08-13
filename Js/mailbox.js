function setTitulo(tit) 
{
  document.getElementById("Titulo").innerHTML = tit;
  if(tit==="Configuración de Usuarios")
  {
    datos = "<?php var_dump($usu)?>";
    alert(datos);
    document.getElementById("contenidoelementos").innerHTML=datos;
  }
}
