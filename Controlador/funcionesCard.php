<?php
function createCard($idusuario,$titulo,$descripcion)
{
    // var_dump($idusuario);
    // var_dump($titulo);
    // var_dump($descripcion);
    $aux='<div class="card" onClick="getCardInfo('.$idusuario.');)">';
    $aux.='<div class="card-body"><h5 class="card-title">'.$titulo.'</h5>';
    $aux.='<p class="card-text">'.$descripcion.'</p>';
    $aux.='<div class="d-flex justify-content-end">';
    $aux.='<button class="btn st-btns"><img src="../imgs/edit.png" class="img-fluid btnIPen" alt="Agregar" /></button>';
    $aux.='<button type="button" class="btn btn-success">Finalizar</a></div></div></div>';
    return $aux;
}
?>