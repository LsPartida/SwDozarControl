<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="estilosnigas.css">
        <title>Tickets</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-mb-2 shadow">
                    <form id="form1">
                        <fieldset>
                            <h2>Nuevo Ticket</h2>
                            <label>Solicitante:</label>
                            <input type="Entrada_T" title="Nombre de quien solicita" class="required" />
                            <label for="Inleft">Agente Asignado:</label>
                            <label for="Inright">CC:</label>
                            <select class="opciones">
                                <option value="LsPartida">LsPartida</option>
                                <option value="SinSkills">SinSkills</option>
                                <option value="Flavio">Flavio</option>
                                <option value="Meco">Meco</option>
                                <option value="Culpa">Culpa</option>
                                <option value="Eugenio">Eugenio</option>
                            </select>
                            <select class="opciones">
                                <option value="NoOP">Sin Copia</option>
                                <option value="LsPartida">LsPartida</option>
                                <option value="SinSkills">SinSkills</option>
                                <option value="Flavio">Flavio</option>
                                <option value="Meco">Meco</option>
                                <option value="Culpa">Culpa</option>
                                <option value="Eugenio">Eugenio</option>
                            </select>
                            <hr/>
                            <label>Etiquetas:</label>
                            <input type="Entrada_T" title="Etiquetas" class="required" />
                            <label> App: </label>
                            <select class="opcionesG">
                                <option value="op1">AppPerra</option>
                                <option value="op2">AppChida</option>
                                <option value="op3">AsuputamadreEstoyMAMADIIIIISIMO</option>
                            </select>
                            <label for="Inleft">Tipo:</label>
                            <label for="Inright">Prioridad:</label>
                            <select class="opciones">
                                <option value="op1">Problema</option>
                                <option value="op2">Consulta</option>
                                <option value="op3">AsuputamadreEstoyMAMADIIIIISIMO</option>
                            </select>
                            <select class="opciones">
                                <option value="op1">Baja</option>
                                <option value="op2">Media</option>
                                <option value="op2">Alta</option>0
                                <option value="op3">AsuputamadreEstaMadreUrgeALV</option>
                            </select><br>
                            <label for="notifications" title="" >Fin de Semana</label>
                            <input type="checkbox" title="Fin de semana" id="notifications" value="subscribe" checked />
                            <h6 id="successMsg">Account Created!</h6>
                            <!--<a id=“submit” class="action-button animate blue" onclick="createAccount(Fname);">
                                Create My Account
                            </a>-->
                        </fieldset>
                    </form>
                </div>
                <div class="col-mb-08 shadow">
                    <form id="form2">
                        <fieldset>
                            <label>Asunto:</label>
                            <input type="Entrada_F2" title="Asunto ticket" class="required" />
                            <label>Respuesta:</label>
                            <form>
                                    <ul class="wysihtml5-toolbar" style=""><li class="dropdown">
                      <a class="btn btn-default dropdown-toggle " data-toggle="dropdown">
                        
                          <span class="glyphicon glyphicon-font"></span>
                        
                        <span class="current-font">Normal text</span>
                        <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on" class="">Normal text</a></li>
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on">Heading 1</a></li>
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
                        <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
                      </ul>
                    </li>
                    <li>
                      <div class="btn-group">
                        <a class="btn btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
                        <a class="btn btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
                        <a class="btn btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
                        
                        <a class="btn btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>
                        
                      </div>
                    </li>
                    <li>
                      <a class="btn btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-quote"></span>
                        
                      </a>
                    </li>
                    <li>
                      <div class="btn-group">
                        <a class="btn btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-list"></span>
                        
                        </a>
                        <a class="btn btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-th-list"></span>
                        
                        </a>
                        <a class="btn btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-indent-right"></span>
                        
                        </a>
                        <a class="btn btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-indent-left"></span>
                        
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
                        <div class="modal-dialog ">
                          <div class="modal-content">
                            <div class="modal-header">
                              <a class="close" data-dismiss="modal">×</a>
                              <h3>Insert link</h3>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
                              </div> 
                              <div class="checkbox">
                                <label> 
                                  <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
                                </label>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                              <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Insert link</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-share"></span>
                        
                      </a>
                    </li>
                    <li>
                      <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
                        <div class="modal-dialog ">
                          <div class="modal-content">
                            <div class="modal-header">
                              <a class="close" data-dismiss="modal">×</a>
                              <h3>Insert image</h3>
                            </div>
                            <div class="modal-body">
                              <div class="form-group">
                                <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
                              </div> 
                            </div>
                            <div class="modal-footer">
                              <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
                              <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Insert image</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="btn btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
                        
                          <span class="glyphicon glyphicon-picture"></span>
                        
                      </a>
                    </li>
                    </ul><textarea class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;" placeholder="Place some text here"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: inline-block; background-color: rgb(255, 255, 255); border-collapse: separate; border-color: rgb(221, 221, 221); border-style: solid; border-width: 1px; clear: none; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 10px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 200px;"></iframe>
                                  </form>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
