function setTipo(tipo)
{
    switch(tipo)
    {
        case 1:
            dato='global';
            break;
        case 2:
            dato='de prioridad alta';
            break;
        case 3:
            dato='de prioridad baja';
    }
    document.getElementById("tipo").innerHTML=dato;
}