function setTitulo(titulo,cont)
{
    document.getElementById("Titulo").innerHTML=titulo;
    switch(cont)
    {
        case 1:
            Cargar("../controlador/getusuarios.php");
            document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddUsu" onClick="addUsu()" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
        case 2:
            Cargar("../controlador/getDerechos.php");
            document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddDer" onClick="addDer()" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
        case 3:
                Cargar("../controlador/getCuentas.php");
                document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddCuenta" onClick="addCta()" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
    }
    
}
function Cargar(url) 
{
    document.getElementById("contenido").innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            document.getElementById("contenido").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", url, true);
    xmlhttp.send(); 
}
