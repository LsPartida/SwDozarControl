const setData(datos,campo)=>{
    campo=datos;
}
const getData=(ruta,campo)=>
{
    fetch(ruta)
    .then(response=>response.json())
    .then(datos=>setData(datos,campo))
}