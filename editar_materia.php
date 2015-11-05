<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<script type="text/javascript" src="./js/materias.js"></script>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">EDITAR ASIGNATURA</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" name="form_editar_materia" id="form_editar_materia">
						
				
					<div class="form-group">
						<div class="col-md-12" id="div_nom_curso">
							<label for="nom_horario" class="control-label ">Nombre</label>
							<input class="form-control nom_materia" type="text" name="nom_materia" id="nom_materia" value="" disabled>
							<div class="text-danger" id="error">
								<span id="error_nom_materia"></span>
							</div>
							<input type="hidden" id="id_materia" disabled>
						</div>
						
					</div>
					<div class="hidden alert alert-danger alert-dismissible" role="alert" id="duplicado">
						      
						       Lo sentimos! Este Nombre <strong>ya existe <span class="glyphicon glyphicon-alert"></span></strong> 
					</div>
						<div class="form-group">	
							<div class="col-md-4">
								<button class="editar_materia btn btn-info btn-block" id="editar_materia" name="editar_materia">Editar</button>
							</div>
							<div class="col-md-4">
								<button class="actualizar_materia btn btn-success btn-block" id="actualizar_materia" data-id="" disabled>Actualizar</button>
							</div>
							<div class="col-md-4">
								<button class="eliminar_materia btn btn-danger btn-block" id="eliminar_materia" data-id="">Eliminar</button>
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
