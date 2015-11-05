<?php
include('./temples/validar_session.php');
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
				<div class="panel-heading"><h4 class="text-center">EDITAR HORARIOS</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="GET" action="./controler/iniciar_session_horario.php "role="form" name="abrir_horario" id="abrir_horario">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
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
						<div class="col-md-4">
							<a class="btn btn-info btn-block" href="nuevo_horario_home.php">Nuevo</a>
						</div>
						<div class="col-md-4">
							<button type="button" class="menu btn btn-success btn-block"  data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><span class="">Modificar</span></button>
						</div>
						<div class="col-md-4">
							<button class="btn btn-danger btn-block" type="" name="eliminar_horario" id="eliminar_horario">Eliminar</button>
						</div>
					
							</form>
						<?php include('./controler/menu_editar.php');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
