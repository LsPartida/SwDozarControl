function setTitulo(titulo,cont)
{
    document.getElementById("Titulo").innerHTML=titulo;
    switch(cont)
    {
        case 1:
            Cargar("../controlador/getusuarios.php");
            break;
        case 2:
                Cargar("../controlador/getDerechos.php");
            break;
        case 3:
                Cargar("../controlador/getCuentas.php");
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
/********************************************************
 * *****************************************************
 * ******************************************** */
