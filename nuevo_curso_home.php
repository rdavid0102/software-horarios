<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">NUEVO CURSO</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/nuevo_curso.php" role="form" name="nuevo_horario" id="nuevo_horario" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
							<div class="form-group">
								<div class="col-md-6" id="div_nom_curso">
									<label for="nom_horario" class="control-label ">Nombre</label>
									<input class="form-control nom_curso" type="text" name="nom_curso" id="nom_curso">
									<div class="text-danger" id="error">
										<span id="error_nom_curso"></span>
									</div>
								</div>
								<div class="col-md-6" id="div_num_curso">
									<label for="num_curso" class="control-label ">Numero de estudiantes</label>
									<input class="form-control num_curso" type="text" name="num_curso" id="num_curso">
									<div class="text-danger" id="error">
										<span id="error_num_curso"></span>
									</div>
								</div>

							</div>
						<div class="hidden alert alert-danger alert-dismissible" role="alert" id="duplicado_nombre">
							 Lo sentimos! El nombre del curso <strong>ya existe <span class="glyphicon glyphicon-alert"></span></strong> 
						</div>
						<div class="hidden alert alert-danger alert-dismissible" role="alert" id="duplicado_numero">      
							 Lo sentimos! Este curso <strong>ya se encuentra Ocupado <span class="glyphicon glyphicon-alert"></span></strong> 
						</div>	
							<div class="form-group">
								<div class="col-md-2"></div>
								<div class="col-md-4">
									<a class="btn btn-info btn-block" href="horarios.php">Atras</a>
									
								</div>
								<div class="col-md-4">
									<button class="nuevo_curso btn btn-success btn-block" name="" id="nuevo_curso">Guardar</button>
								</div>
								<div class="col-md-2"></div>
							</div>
								<script type="text/javascript">
										document.nuevo_horario.nom_curso.focus();
								</script>
					</form>
				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include('./temples/search_curso.php');?>
</body>
</html>
