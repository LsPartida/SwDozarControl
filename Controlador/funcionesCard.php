<?php
function createCard($idcard,$idusuario,$titulo,$descripcion,$idapp,$empresa)
{
    // var_dump($idusuario);
    // var_dump($titulo);
    // var_dump($descripcion);
    $aux='<div class="card shadow my-3">';
    // switch($idapp)
    // {
    //     case 1:
    //         $aux.=' bg-success text-white';
    //     case 2:
    //         $aux.=' bg-primary text-white';
    //     case 3:
    //         $aux.=' bg-secondary text-white';
    // }
    // $aux.='onClick="getCardInfo('.$idusuario.')">';
    $aux.='<div class="card-body"><h5 id="Titulo'.$idcard.'" class="card-title">'.$titulo.'</h5>';
    $aux.='<p id="descripcion'.$idcard.'" class="card-text">'.$descripcion.'</p>';
    $aux.='<p id="empresa'.$idcard.'" class="card-text">#'.$empresa.'</p>';
    $aux.='<div class="d-flex justify-content-end">';
    $aux.='<button onclick="Llenar('.$idcard.')" data-toggle="modal" data-target="#editModal" class="btn st-btns"><img src="../imgs/edit.png" class="img-fluid btnIPen" alt="Agregar" /></button>';
    $aux.='<button onclick="finalizar('.$idcard.')"(type="button" class="btn btn-success">Finalizar</a></div></div></div>';
    return $aux;
    
}
?>