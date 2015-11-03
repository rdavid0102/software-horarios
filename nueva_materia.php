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
				<div class="panel-heading"><h4 class="text-center">NUEVA ASIGNATURA</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/nuevo_curso.php" role="form" name="nuevo_materia" id="nuevo_materia" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">

							<div class="form-group">
								<div class="col-md-12" id="div_nom_materia">
									<label for="nom_asignatura" class="control-label ">Nombre</label>
									<input class="form-control nom_materia" type="text" name="nom_materia" id="nom_materia">
									<div class="text-danger" id="error">
										<span id="error_nom_materia"></span>
									</div>
								</div>
							</div>
					<div class="hidden alert alert-danger alert-dismissible" role="alert" id="duplicado">     
						 Lo sentimos! El nombre de la asignatura <strong>ya existe <span class="glyphicon glyphicon-alert"></span></strong> 
					</div>	
			<div class="form-group">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<a class="btn btn-info btn-block" href="horarios.php">Atras</a>
				</div>
				<div class="col-md-4">
					<button class="nuevo_materia btn btn-success btn-block" name="" id="nuevo_materia">Guardar</button>
				</div>
				<div class="col-md-2"></div>
			</div>
			<script type="text/javascript">
					document.nuevo_materia.nom_materia.focus();
			</script>
					</form>
				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<?php include('./temples/search_asig.php');?>
</body>
</html>
