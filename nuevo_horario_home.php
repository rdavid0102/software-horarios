<?php
include('./temples/validar_session_only.php');
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
				<div class="panel-heading"><h4 class="text-center">NUEVO HORARIO</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/nuevo_horario.php" role="form" name="nuevo_horario" id="nuevo_horario" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
						
							<div class="form-group">
								<div class="col-md-12" id="div_nom_horario">
									<label for="nom_horario" class="control-label ">Nombre</label>
									<input class="form-control nom_horario" type="text" name="nom_horario" id="nom_horario">
									<div class="text-danger" id="error">
										<span id="error_nom_horario"></span>
									</div>
								</div>
								
							</div>
					<div class="hidden alert alert-danger alert-dismissible" role="alert" id="duplicado">   
						       Lo sentimos! El nombre del horario <strong>ya existe <span class="glyphicon glyphicon-alert"></span></strong> 
					</div>
					
			<div class="form-group">
				<div class="col-md-2"></div>
					<div class="col-md-4">
						<a class="btn btn-info btn-block" href="horarios.php">Atras</a>
					</div>
						<div class="col-md-4">
							<button class="nuevo_horario btn btn-success btn-block" name="" id="nuevo_horario">Guardar</button>
						</div>
				<div class="col-md-2"></div>
			</div>
						<script type="text/javascript">
								document.nuevo_horario.nom_horario.focus();
						</script>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
