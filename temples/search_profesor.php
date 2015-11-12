<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">BUSCAR PROFESOR</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" role="form" id="busqueda" name="busqueda">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
							<div class="input-group">
								<input type="text" class="form-control" id="text_buscar" name="text_buscar" placeholder="buscar">
								   <span class="input-group-btn">
										<button class="btn btn-info" id="btn_buscar"><span class="glyphicon glyphicon-search"></span></button>
								  </span>
							 </div>
					
						<script type="text/javascript">
							document.busqueda.buscar.focus();
						</script>
					</form>
					</div>
						<div class="col-md-12"><br>
							<div class="table-responsive">
								<table class="table table-bordered table-hover" id="tabla_profesores">
											<tr class="info">
												<th>Cedula</th>
												<th>Nombres</th>
												<th>Apellidos</th>
												<th>Sexo</th>
												<th>Area</th>
												<th>Telefono</th>
												<th>Celular</th>
												<th>Email</th>
											</tr>	
										</table>
							</div>
								<div class="alert alert-warning alert-dismissible hidden" role="alert" id="alert_profe_vacio">
	                     			 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	                      			Lo sentimos! no se encontraron resultados de tu <strong>Busqueda <span class="glyphicon glyphicon-search"></span></strong> 
                  				</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>