var datosusu="",tiposderecho="";
getJSON("../Controlador/getUsuarios.php",1);
getJSON("../Controlador/prueba.php",2);
function verDetallesUsu(id)
{
//Consultar info 
datosusu.forEach(el => {
    
    if(id==el.IDUSUARIO)
    {
        console.log("si");
        document.getElementById("username").value=el.USUARIO;
        document.getElementById("pass").value=el.USUARIO;
        document.getElementById("pass2").value=el.USUARIO;
    }
    console.log("No");
});
//mostar info        
}
function addUsu()
{
    if(document.getElementById("username").value =="" || document.getElementById("pass").value==""|| DocumentFragment.getElementById("pass2").value=="")
    {
        Swal.fire({
            type: 'error',
            title: 'Error',
            text: 'Datos vacios'
          })
        return;
    }
    if(document.getElementById("pass").value != document.getElementById("pass2").value)
    {
        Swal.fire({
            type: 'error',
            title: 'Error',
            text: 'Las contraseñas no coinciden'
          })
          return;
    }
    
    
        var valor=document.getElementById("derechos").selectedIndex+1;
        while (document.getElementById("derechos").hasChildNodes()) 
        {
            document.getElementById("derechos").removeChild(document.getElementById("derechos").firstChild);
        }
        var opt = document.createElement('option');
        opt.appendChild(document.createTextNode(valor));
        opt.value=valor;
        document.getElementById("derechos").appendChild(opt); 
        document.getElementById("addusu").submit();
    

}
function setTitulo(titulo,cont)
{
    document.getElementById("Titulo").innerHTML=titulo;
    switch(cont)
    {
        case 1:
            Cargar("../controlador/getusuariostable.php","contenido");
            document.getElementById("boton").innerHTML='<button onclick=CargarS("derechos",1); data-toggle="modal" data-target="#ModalAddUsu"  class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
        case 2:
            Cargar("../controlador/getDerechos.php","contenido");
            document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddDer"  class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
        case 3:
                Cargar("../controlador/getCuentas.php","contenido");
                document.getElementById("boton").innerHTML='<button data-toggle="modal" data-target="#ModalAddCuenta" class="btn st-btns"><img src="../imgs/mas.png" class="img-fluid smalladd" alt="Agregar" /></button>';
            break;
    }
    
}
function getJSON(url,tipo)
{
    var datos;
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange=function() 
    {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
        {
            datos=JSON.parse(xmlhttp.responseText);
            switch(tipo)
            {
                case 1:
                    datosusu=datos;
                    break;
                case 2:
                    tiposderecho=datos;
                    break;
            }
        }
    }
    xmlhttp.open("POST", url, true);
    xmlhttp.send(); 
}
function CargarS(campo,tipo) 
{
    // console.log(campo);
    // console.log(document.getElementById(campo));
    
    switch (tipo)
    {
        case 1:
                while (document.getElementById(campo).hasChildNodes()) {
                    document.getElementById(campo).removeChild(document.getElementById(campo).firstChild);
                 }
                tiposderecho.forEach(el => {
                    var opt = document.createElement('option');
                    opt.appendChild( document.createTextNode(el) );
                    opt.value = el-1; 
                    document.getElementById(campo).appendChild(opt); 
                });
            break;
    }
    
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

 