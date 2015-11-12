
<script type="text/javascript" src="./js/cargar_profesor.js"></script>
<div class="modal fade" id="myModal_buscar_profesor" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ACADEMIC SYSYTEM</h4>
      </div>
      <div class="modal-body">
      <div class="form-horizontal" id="busqueda" name="busqueda">

              <div class="input-group">
                <input type="text" class="form-control" id="text_buscar_profesor" placeholder="buscar">
                   <span class="input-group-btn">
                    <button class="btn btn-info buscar_profesor_modal" id="buscar_profesor_modal" name="buscar_profesor_modal"><span class="glyphicon glyphicon-search"></span></button>
                  </span>
               </div>
          <input type="hidden" name="valor">
            <script type="text/javascript">
              document.busqueda.buscar.focus();
            </script>
          </div>
                      <div class=""><br>
            
                <table class="table table-bordered table-hover" id="tabla_profesores">
                      <tr class="info">
                        <th>Cedula</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Area</th>
                      </tr>   

                  </table>
                  <div class="alert alert-warning alert-dismissible hidden" role="alert" id="alert_profe_vacio">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      Lo sentimos! no se encontraron resultados de tu <strong>Busqueda <span class="glyphicon glyphicon-search"></span></strong> 
                  </div>
              </div>
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        

      </div>
    </div>
  </div>
</div>
