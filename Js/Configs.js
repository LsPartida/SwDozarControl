// getJSON("../Controlador/getUsuarios.php",1);
// getJSON("../Controlador/prueba.php",2);
const setData=(jsonThing,id)=>{
    console.log(jsonThing[id]);
}
const verDetalles=(id,tipo)=>
{
    let ruta=""
    switch(tipo)
    {
        case 1:
            ruta="../Controlador/getusuariosJson.php";
            break;
        case 2:
            ruta="../Controlador/getderechosJson.php";
            break;
        case 2:
            ruta="../Controlador/getCuentasJson.php";
            break;
    }
    fetch(ruta)
    .then(response=>response.json())
    .then(jsonThing=>setData(jsonThing,id))
    
    
    //put data
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
            Cargar("../controlador/getusuarios.php","contenido");
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
function toJSON(params)
{
    return JSON.stringify(params);
}
function addder()
{
    // si todo sale bien
    // arr ={"idcard": idcard};
    tipoder=document.getElementById("tipoder").value
    pend=document.getElementById("chkpend").checked
    conf=document.getElementById("chkconf").checked
    rep=document.getElementById("chkrep").checked
    arr={"0":pend,"1":conf,"2":rep};
    der=toJSON(arr)
    datos={"tipoder": tipoder,}
    
    
    alert(datos);
    // post_to_url("../Controlador/addDer.php",datos,"POST")
}
function post_to_url(path, params, method) 
{
    method = method || "post"; // Set method to post by default, if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    var addField = function( key, value )
    {
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", value );
        form.appendChild(hiddenField);
    }; 
    for(var key in params) 
    {
        if(params.hasOwnProperty(key)) 
        {
            if( params[key] instanceof Array )
            {
                for(var i = 0; i < params[key].length; i++)
                {
                    addField( key, params[key][i] )
                }
            }
            else{
                addField( key, params[key] ); 
            }
        }
    }

    document.body.appendChild(form);
    form.submit();
}