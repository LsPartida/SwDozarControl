<?php
$obj = new Conector;
$obj->Connect();
$res=$obj->Consultar(null,"pendientes inner join pendientesdetalle using(idpendiente)","TIPOPENDIENTE=3 and FECHAFIN IS NULL");
// var_dump($res);
foreach ($res as $row) 
{
    if(!isset($row['FECHAFIN']))
    {
    ?>
    <div class="card" style="width: 18rem;" onClick="getPucha(<?php echo($row['IDUSUARIO']);?>)">
        <div class="card-body">
            <h5 class="card-title">
            <?php
                echo($row['TITULO']);
            ?>
            </h5>
            <p class="card-text">
            <?php echo($row['DESCRIPCION']); ?>
            </p>
            <div class="d-flex justify-content-end">
                <a href="#" class="btn btn-primary">Editar</a>&nbsp<a href="#" class="btn btn-success">Finalizar</a>
            </div>
        </div>
    </div>
    <?php   
    }
}
$obj->Close();
?>