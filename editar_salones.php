<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<script type="text/javascript" src="./js/salones.js"></script>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">SALONES</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
						<form class="form-horizontal">
							<div class="form-group">
								<div class="col-md-4" id="error_num">
									<label class="control-label">No Salon</label>
									<input class="form-control" id="num_salon" disabled>
									<input class="form-control" type="hidden" id="id_salon" disabled>
								</div>
								<div class="col-md-4">
									<label class="control-label">Profesor</label>
									<input class="form-control" id="profesor" disabled>
								</div>
								<div class="col-md-4">
									<label class="control-label">Asignatura</label>
									<input class="form-control" id="asignatura" disabled>
								</div>
							</div>
							<br>
							<div class="form-group">
								<div class="col-md-4">
									<button class="btn btn-default btn-block" id="editar_salon">Editar</button>
								</div>
								<div class="col-md-4">
									<button class="btn btn-success btn-block" id="actualizar_salon" disabled>Actualizar</button>
								</div>
								<div class="col-md-4">
									<button class="btn btn-danger btn-block" id="eliminar_salon">Eliminar</button>
								</div>
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
