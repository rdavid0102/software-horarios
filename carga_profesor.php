<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');

include('./controler/menu_profesor.php')
?>
<script type="text/javascript" src="./js/carga_profesor.js"></script>
<body>
<BR>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">CARGA ACADEMICA-PROFESOR</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/asignar_carga.php" role="form" name="form_carga_profesor" id="form_carga_profesor" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
						<div class="form-group">
							<div class="col-md-12">
								<label class="control-label">DATOS PROFESOR</label>
								<hr>
							</div>
						</div>
					<div class="form-group">
						<div class="col-md-3">

							
							<label for="nombre" class="control-label" >Buscar</label><br>
							<a class="btn btn-info btn-block" id="menu_buscarprofesor" data-toggle="modal" data-target="#myModal_buscar_profesor" href=""><span class="glyphicon glyphicon-search"></span></button></a>
						</div>
						<div class="col-md-3" id="div_nombres">
							<label for="nombre" class="control-label ">Nombres</label>
							<input class="form-control" type="text" name="nombres" id="nombres" value="" disabled>
							<input id="id_profesor" class="hidden" disabled>
						</div>
						<div class="col-md-3" id="div_apellidos">
							<label for="apellidos" class="control-label ">Apellidos</label>
							<input class="form-control" type="text" name="apellidos" id="apellidos" disabled>
							<div class="text-danger" id="error">
								<span id="error_apellidos"></span>
							</div>
						</div>
						<div class="col-md-3" id="div_area">
							<label for="area" class="control-label ">Area</label>
							<input class="form-control" type="text" name="area" id="area" disabled>
							<div class="text-danger" id="error">
								<span id="error_area"></span>
							</div>
						</div>

					</div>
					<div class="form-group">
							<div class="col-md-12">
								<label class="control-label">CARGA ACADEMICA</label>
								<hr>
							</div>
						</div>
				<div class="form-group">
					<div class="col-md-3">
						<label class="control-label">Asignatura</label>
						<select class="form-control" id="combo_asignaturas">
							<option></option>
						</select>
						<div class="text-danger" id="error">
								<span id="error_combo_asignatura"></span>
						</div>
					</diV>
						<div class="col-md-2" id="div_horas_semana">
							<label for="horas_semana" class="control-label ">Horas x semana</label>
							<input class="form-control" type="text" name="horas_semana" id="horas_semana">
							<div class="text-danger" id="error">
								<span id="error_horas_semana"></span>
							</div>
						</div>
						<div class="col-md-2" id="div_horas_dia">
							<label for="horas_dia" class="control-label ">Horas max dia</label>
							<input class="form-control" type="text" name="horas_dia" id="horas_dia">
							<div class="text-danger" id="error">
								<span id="error_horas_dia"></span>
							</div>
						</div>
							<div class="col-md-3">
								<label class="control-label">Curso</label>
								<select class="form-control" id="combo_cursos">
								<option></option>
								</select>
						<div class="text-danger" id="error">
								<span id="error_combo_cursos"></span>
						</div>
							</diV>
						<div class="col-md-2" id="div_aula">
							<label for="aula" class="control-label ">Aula No</label>
							<input class="form-control" type="text" name="aula" id="aula">
							<div class="text-danger" id="error">
								<span id="error_aula"></span>
							</div>
						</div>
					</diV>
					<div class="form-group">
						<div class="col-md-4 col-md-offset-2">
							<a href="./home.php" class="btn btn-default btn-block">Atras</a>
							</div>
						<div class="col-md-4">
							<a class="btn btn-default btn-block" id="asignar_carga">Asignar</a>
						</div>
					</div>	

					</form>
					<hr>

				<div class=""><br>
					
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="tabla_carga">
							<td colspan="4" rowspan="1" class="text-center info"><b>CARGA ACADEMICA PROFESOR <span id="nombres"></span></td>
							<tr class="info">						
								<th>Asignatura</th>
								<th>Curso</th>
								<th>Aula</th>	
								<th>No H. X semana</th>		
							</tr>
					
							</table>
							<table class="table table-bordered table-hover">
							<td class="text-right"><b>Total de Horas por semana</td>
							<td class="success"><span id="total"></span><br></td>
							</table>
							<div class="alert alert-warning alert-dismissible" role="alert" id="carga_vacia">
							Lo sentimos! <strong>Ninguna carga academica asignada <span class="glyphicon glyphicon-alert"></span></strong> 
							</div>'
							
					</div>
					
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<body>

<script type="text/javascript">
	document.form_carga_profesor.buscar.focus();
</script>

</body>
</html>
