<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-info">
        <div class="panel-heading"><h4 class="text-center">NUEVO USUARIO</h4></div>
        <div class="panel-body">
          <div class="container-fluid">
          <form class="form-horizontal" role="form" method="POST" action="./controler/enviar_datos.php" id="form_enviar_datos" name="form_enviar_datos">
            <input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
              <div class="form-group">
                <div class="col-xs-12">
                  <label class="label-goti">Información Personal</label>
                </div>  
                <div class="col-xs-12">
                  <hr>
                </div>
              </div>
  
              <div class="form-group">
            <div class="col-md-8" id="div_cedula">
              <label for="cedula" class="control-label ">Cedula</label>
              <input class="form-control" type="text" name="cedula" id="cedula">
              <div class="text-danger" id="error">
                <span id="error_cedula"></span>
              </div>
            </div>

            <div class="col-md-4" id="div_genero">
            <label for="genero" class="control-label ">Genero</label>
            <select class="form-control" name="genero" id="genero">
                <option></option>
                <option>Masculino</option>
                <option>Femenino</option>
            </select>
              <div class="text-danger" id="error">
                <span id="error_genero"></span>
              </div>
          </div>
        </div>
          <div class="form-group">  
            <div class="col-md-4" id="div_nombres">
              <label for="nombre" class="control-label ">Nombres</label>
              <input class="form-control" type="text" name="nombres" id="nombres">
              <div class="text-danger" id="error">
                <span id="error_nombres"></span>
              </div>
            </div>
            <div class="col-md-4" id="div_apellidos">
              <label for="apellidos" class="control-label ">Apellidos</label>
              <input class="form-control" type="text" name="apellidos" id="apellidos">
              <div class="text-danger" id="error">
                <span id="error_apellidos"></span>
              </div>
            </div>
            <div class="col-md-4" id="div_celular">
              <label for="celular" class="control-label ">Celular</label>
              <input class="form-control" type="text" name="celular" id="celular">
              <div class="text-danger" id="error">
                <span id="error_celular"></span>
              </div>
            </div>

          </div>
    
        <div class="form-group">

          <div class="col-md-8" id="div_email">
            <label for="email" class="control-label ">Email</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="jane.doe@example.com">
              <div class="text-danger" id="error">
                  <span id="error_email"></span>
              </div>
          </div>
          <div class="col-md-4">
            <label for="imagen" class="control-label ">Imagen</label>
            <input class="form-control" type="file" name="file" id="imagen">
          </div>
        </div>
            <p>
            <div class="form-group">
              <div class="col-xs-12">
                <label class="label-goti">Información de inicio de Sesión</label>
              </div>  
              <div class="col-xs-12">
                <hr>
              </div>
            </div>
            
          <div class="form-group">
              <div class="col-xs-12" id="div_password">
                <label class="control-label">Contraseña</label>
                <input class="form-control" type="password" id="password1" name="password1" placeholder="Password" >
                  <div class="text-danger" id="error">
                    <span id="error_password"></span>
                  </div>
              </div>
          </div>  

    
            <div class="form-group">
              <div class="col-xs-12" id="div_password">
                <label class="control-label">Confirmar Contraseña</label>
                <input class="form-control" type="password" id="password2" name="password2" placeholder="Password" >
            </div>
          </div>    
        <div class="form-group">
          <div class="col-xs-6">
            <a class="cancelar btn btn-info btn-block" href="./home.php">Cancelar</a>
          </div>
          <div class="col-xs-6">
            <button class="enviar_datos btn btn-success btn-block">Enviar</button>
          </div>
        </div>
</form>
</div>
<button class="prueba">prueba</button>
  </div>
</div>
</div>
</div>
</div>