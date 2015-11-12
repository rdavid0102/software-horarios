<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');

include('./temples/menu_profesor.php')
?>
<script type="text/javascript" src="./js/editar_carga_profesor.js"></script>
<body>
<BR>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">EDITAR CARGA ACADEMICA-PROFESOR</h4></div>
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
							<button class="btn btn-info btn-block" id="menu_buscarprofesor" data-url="editar_carga_profesor" disabled><span class="glyphicon glyphicon-search"></span></button></button>
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
					<div class="col-md-3" id="div_asignatura">
						<label class="control-label">Asignatura</label>
						<select class="form-control" id="combo_asignaturas" disabled>
							<option></option>
						</select>
						<div class="text-danger" id="error">
								<span id="error_combo_asignatura"></span>
						</div>
					</div>
				
						<div class="col-md-2" id="div_horas_semana">
							<label for="horas_semana" class="control-label ">Horas x semana</label>
							<input class="form-control" type="text" name="horas_semana" id="horas_semana" disabled>
							<div class="text-danger" id="error">
								<span id="error_horas_semana"></span>
							</div>
						</div>
						<div class="col-md-2" id="div_horas_dia">
							<label for="horas_dia" class="control-label ">Horas max dia</label>
							<input class="form-control" type="text" name="horas_dia" id="horas_dia" disabled>
							<div class="text-danger" id="error">
								<span id="error_horas_dia"></span>
							</div>
						</div>
						<div class="col-md-3" id="div_curso">
							<label class="control-label combo_cursos">Curso</label>
								<select class="form-control" id="combo_cursos" disabled>
										<option></option>
								</select>
								<div class="text-danger" id="error">
									<span id="error_combo_cursos"></span>
								</div>
						</div>
						<div class="col-md-2" id="div_aula">
							<label for="aula" class="control-label ">Aula No</label>
							<input class="form-control" type="text" name="aula" id="aula" disabled>
							<div class="text-danger" id="error">
								<span id="error_aula"></span>
							</div>
							<input id="id_salon" class="hidden" disabled>
						</div>

				</div>
				<div class="form-group">
							<div class="col-md-12">
				
								<hr>
							</div>
						</div>
					<div class="form-group">
						<div class="col-md-3">
							<a href="./home.php" class="btn btn-default btn-block">Atras</a>
						</div>
						<div class="col-md-3">
							<button class="btn btn-info btn-block" id="btn_editar">Editar</button>
						</div>
							<div class="col-md-3">
							<button class="btn btn-success btn-block" id="btn_asignar" disabled>Asignar</button>
						</div>
					
						<div class="col-md-3">
							<button class="btn btn-danger btn-block" id="btn_eliminar">Eliminar</button>
						</div>
					</div>	

					</form>
					<hr>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	document.form_carga_profesor.buscar.focus();
</script>

</body>
</html>
