var tipo=0;
var app=0;
var id;
function setTipo(tipo)
{
    this.tipo=tipo;
}
function getId(id)
{
    this.id=id;
}
function finalizar(idcard)
{
    console.log(idcard)
}
function setApp(app)
{
    this.app=app;
    console.log(tipo+" "+app+" "+id);
    // document.getElementsByName("ID").text=id;
    // document.getElementsByName("app").value=" asdsa"+app;
    // document.getElementsByName("tipo").attribute=tipo;
    document.getElementById("ID").value=id;
    document.getElementById("app").value=app;
    document.getElementById("tipopend").value=tipo;
    document.getElementById("form").submit();
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

function post_to_url(path, params, method) {
    method = method || "post"; // Set method to post by default, if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    var addField = function( key, value ){
        var hiddenField = document.createElement("input");
        hiddenField.setAttribute("type", "hidden");
        hiddenField.setAttribute("name", key);
        hiddenField.setAttribute("value", value );

        form.appendChild(hiddenField);
    }; 

    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            if( params[key] instanceof Array ){
                for(var i = 0; i < params[key].length; i++){
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