<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP + AJAX + MYSQL + JSON + PDO</title>
</head>
<body>
    <h1>Personas</h1>
    <div id="resultado">

    </div>
    <button onclick="Cargar();">Mostrar Datos</button>
</body>
<script>
    function Cargar() 
    {
        var xmlhttp = new XMLHttpRequest();
        var url = "consulta.php";
        xmlhttp.onreadystatechange=function() 
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
            {
                var array = JSON.parse(xmlhttp.responseText);
                var i;
                var out = "<table border='1'>";
                for(i = 0; i < array.length; i++) 
                {
                    out+="<tr><td>"+
                    array[i].DESCRIPCION +
                    "</td><td>"+
                    array[i].nombresidusuario +
                    "</td><td>" +
                    array[i].apellidostipopendiente+
                    "</td><td>"                    
                }
                out += "</table>";
                document.getElementById("resultado").innerHTML = out;
            }
        }
        xmlhttp.open("POST", url, true);
        xmlhttp.send(); 
    }
</script>
</html>