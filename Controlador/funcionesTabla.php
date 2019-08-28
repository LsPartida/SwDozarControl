<?php
function startTable($titulos)
{
        $aux="<thead><tr><th scope='col'>#</th>";
        foreach($titulos as $i)
                $aux.="<th scope='col'>".$i."</th>";
        $aux.="</th></tr></thead><tbody>";
        return $aux;
}
function addData($data)
{
        return "<td>".$data."</td>";
}
function addRow($cont,$id)
{
        return "<tr data-toggle='modal' data-target='#ModalAddUsu' class='item' onClick='verDetallesUsu(".$cont.");'><th scope='row'>".$cont."</th>";
}
function closeRow($cpo)
{
        return "</tr>";
}
function endTable()
{
        return "</tbody>";
}
?>