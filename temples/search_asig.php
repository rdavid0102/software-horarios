<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">BUSCAR ASIGNATURA</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
						<form class="form-horizontal" role="form" id="busqueda" name="busqueda">
							<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">	
							<div class="rows">
								<div class="form-group">
									<div class="col-md-10">
										<div class="input-group">
											<input type="text" class="form-control hidden-xs hidden-sm" id="text_buscar" name="text_buscar" placeholder="buscar">
											   <span class="input-group-btn hidden-xs hidden-sm">
													<button class="btn btn-info" id="btn_buscar"><span class="glyphicon glyphicon-search"></span></button>
											  </span>
										 </div>								
									</div>
									<div class="col-md-2">
										 	<select class="form-control" id="t_busqueda" name="t_busqueda">
										 		<option value="nom_materia">Nombre</option>
										 	
										 	</select>
									</div>
								 </div>
						
							</div>
						</div>
								<script type="text/javascript">
								document.busqueda.buscar.focus();
								</script>	
						</form>
						
				<div class="col-md-12"><br>
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="tabla_materias">
							<tr class="info">
								<th>Id Asignatura</th>						
								<th>Asignatura</th>
							</tr>
								
						</table>
						<div class="alert alert-warning alert-dismissible" role="alert" id="asignaturas_vacias">
						      
						       Lo sentimos! <strong>El sistema no encontro ningun asignatura registrada <span class="glyphicon glyphicon-alert"></span></strong> 
						</div>
				
					</div>
				</div>
			
			</div>
		</div>
	</div>
</div>