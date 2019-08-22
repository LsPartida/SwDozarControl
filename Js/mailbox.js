var datos;
function addUsu()
{
    CargarS("../controlador/prueba.php","derechos")
}
function setTitulo(titulo,cont)
{
    document.getElementById("Titulo").innerHTML=titulo;
    switch(cont)
    {
        case 1:
            Cargar("../controlador/getusuarios.php","contenido");
            document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddUsu" onClick="addUsu()" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
        case 2:
            Cargar("../controlador/getDerechos.php","contenido");
            document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddDer" onClick="addDer()" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
        case 3:
                Cargar("../controlador/getCuentas.php","contenido");
                document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddCuenta" onClick="addCta()" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
    }
    
}
function CargarS(url,campo) 
{
    // console.log(campo);
    // console.log(document.getElementById(campo));
    while (document.getElementById(campo).hasChildNodes()) {
        document.getElementById(campo).removeChild(document.getElementById(campo).firstChild);
     }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            datos=JSON.parse(xmlhttp.responseText);
            datos.forEach(el => {
                var opt = document.createElement('option');
                opt.appendChild( document.createTextNode(el) );
                opt.value = el-1; 
                document.getElementById(campo).appendChild(opt); 
            });
        }
    }
    xmlhttp.open("POST", url, true);
    xmlhttp.send(); 
}
function Cargar(url,campo) 
{
    document.getElementById(campo).innerHTML = "";
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            document.getElementById(campo).innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("POST", url, true);
    xmlhttp.send(); 
}
/********************************************************
 * *****************************************************
 * ******************************************** */
