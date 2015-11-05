<?php
include('./temples/validar_session_only.php');
include('./temples/validar_horario.php')
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<script type="text/javascript" src="./js/horarios.js"></script>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">HORARIOS</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="GET" action="./controler/iniciar_session_horario.php "role="form" name="abrir_horario" id="abrir_horario">
						

					<div class="form-group">
						<div class="col-md-12" id="div_horiarios">
						<label for="combo_horarios" class="control-label ">Nombres</label>
						<select class="form-control" name="nom_horario" id="nom_horario">
								
						</select>
							<div class="text-danger" id="error">
								<span id="error_combo_horario"></span>
							</div>
					</div>

					</div>
					
			<div class="form-group">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<a class="btn btn-info btn-block" href="nuevo_horario_home.php">Nuevo</a>
				</div>
				<div class="col-md-4">
					<button class="btn btn-success btn-block" type="submit" id="abrir_horario">Abrir</button>
				</div>
				<div class="col-md-2"></div>
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
