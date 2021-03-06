<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<script type="text/javascript" src="./js/cursos.js"></script>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">EDITAR CURSO</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" name="form_editar_curso" id="form_editar_curso">
					<div class="form-group">
						<div class="col-md-6" id="div_nom_curso">
							<label for="nom_horario" class="control-label ">Nombre</label>
							<input class="form-control nom_curso" type="text" name="nom_curso" id="nom_curso" value=""disabled>
							<input type="hidden" name="id_curso" id="id_curso" value=""disabled>
							<div class="text-danger" id="error">
								<span id="error_nom_curso"></span>
							</div>
						</div>
						<div class="col-md-6" id="div_num_curso">
							<label for="num_curso" class="control-label ">Numero</label>
							<input class="form-control num_curso" type="text" name="num_curso" id="num_curso" value=""disabled>
							<div class="text-danger" id="error">
								<span id="error_num_curso"></span>
							</div>
						</div>
						
					</div>
					<div class="hidden alert alert-danger alert-dismissible" role="alert" id="duplicado_numero">      
						 Lo sentimos! Este curso <strong>ya se encuentra Ocupado <span class="glyphicon glyphicon-alert"></span></strong> 
					</div>
						<div class="form-group">
							
							<div class="col-md-4">
								<button class="editar_curso btn btn-info btn-block" id="editar_curso" name="editar_curso">Editar</button>
							</div>
							<div class="col-md-4">
								<button class="actualizar_curso btn btn-success btn-block" id="actualizar_curso" data-id="" disabled>Actualizar</button>
							</div>
							<div class="col-md-4">
								<button class="eliminar_curso btn btn-danger btn-block" id="eliminar_curso" data-id="">Eliminar</button>
							</div>
						
								</form>
						
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
