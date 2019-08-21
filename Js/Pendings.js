var tipo=0;
var app=0;
var id;
function setTipo(tipo)
{
    this.tipo=tipo;
    console.log(this.tipo);
}
function getId(id)
{
    this.id=id;
}

function setApp(app)
{
    this.app=app;
    form=document.getElementById("formedit");
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "idapp");
    hiddenField.setAttribute("value", this.app );
    form.appendChild(hiddenField);
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "tipo");
    hiddenField.setAttribute("value", this.tipo );
    form.appendChild(hiddenField);
    form.action="../Controlador/addPending.php"
    
    
    
    // post_to_url("../Controlador/addPending.php",campos,"POST");
}
function cargarPendientes(id)
{
    getId(id);
    Cargar('../Controlador/getPendientesGlob.php',"contglob");
    Cargar('../Controlador/getPendientesAlt.php',"contalt");
    Cargar('../Controlador/getPendientesNorm.php',"contbaj");
}

function Cargar(url,campo) 
{
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
function Llenar(idcard)
{
//    console.log(document.getElementById("Titulo"+idcard).innerText);
//    console.log("titulo"+idcard);
    document.getElementById("pendingtitle").innerHTML="Editar Pendiente"
    document.getElementById("Tituloform").value=document.getElementById("Titulo"+idcard).innerText+"";
    document.getElementById("Empresa").value=(document.getElementById("empresa"+idcard).innerText+"").substr(1);
    document.getElementById("descripcion").value=document.getElementById("descripcion"+idcard).innerText+"";
    document.getElementById("pendingbtn").innerHTML="Editar";
    form=document.getElementById("formedit");
    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "idcard");
    hiddenField.setAttribute("value", idcard );
    form.appendChild(hiddenField);
    document.getElementById("formedit").action="../Controlador/editPending.php"
}

function finalizar(idcard) 
{
    arr ={"idcard": idcard};
    post_to_url("../Controlador/endPending.php",arr,"POST")
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