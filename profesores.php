<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<script type="text/javascript" src="./js/profesor.js"></script>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">NUEVO PROFESOR</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/nuevo_profesor.php" role="form" name="form_nuevo_profesor" id="form_nuevo_profesor" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">

					<div class="form-group">
						<div class="col-md-8" id="div_cedula">
							<label for="cedula" class="control-label ">Cedula</label>
							<input class="form-control" type="text" name="cedula" id="cedula" disabled>
							<div class="text-danger" id="error">
								<span id="error_cedula"></span>
							</div>
						</div>

						<div class="col-md-4" id="div_genero">
						<label for="genero" class="control-label ">Genero</label>
						<select class="form-control" name="genero" id="genero" disabled>
								<option></option>
								<option>Masculino</option>
								<option>Femenino</option>
						</select>
							<div class="text-danger" id="error">
								<span id="error_genero"></span>
							</div>
					</div>
				</div>
					<div class="form-group">	
						<div class="col-md-4" id="div_nombres">
							<label for="nombre" class="control-label ">Nombres</label>
							<input class="form-control" type="text" name="nombres" id="nombres" disabled>
							<div class="text-danger" id="error">
								<span id="error_nombres"></span>
							</div>
						</div>
						<div class="col-md-4" id="div_apellidos">
							<label for="apellidos" class="control-label ">Apellidos</label>
							<input class="form-control" type="text" name="apellidos" id="apellidos" disabled>
							<div class="text-danger" id="error">
								<span id="error_apellidos"></span>
							</div>
						</div>
						<div class="col-md-4" id="div_area">
							<label for="area" class="control-label ">Area</label>
							<input class="form-control" type="text" name="area" id="area" disabled>
							<div class="text-danger" id="error">
								<span id="error_area"></span>
							</div>
						</div>

					</div>
		
				<div class="form-group">
					<div class="col-md-2" id="div_telefono">
						<label for="telefono" class="control-label ">Telefono</label>
						<input class="form-control" type="text" name="telefono" id="telefono" disabled>
						<div class="text-danger" id="error">
								<span id="error_telefono"></span>
							</div>
					</div>
					<div class="col-md-2" id="div_celular">
						<label for="celular" class="control-label ">Celular</label>
						<input class="form-control" type="text" name="celular" id="celular" disabled>
						<div class="text-danger" id="error">
								<span id="error_celular"></span>
							</div>
					</div>
					<div class="col-md-4" id="div_email">
						<label for="email" class="control-label ">Email</label>
						<input class="form-control" type="email" id="email" name="email" placeholder="jane.doe@example.com" disabled>
						<div class="text-danger" id="error">
								<span id="error_email"></span>
							</div>
					</div>
					<div class="col-md-4">
						<label for="imagen" class="control-label ">Imagen</label>
						<input class="form-control" type="file" name="file" id="imagen" disabled>
					</div>
				</div>
			<div class="form-group">	
				<div class="col-md-8">
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<button class="nuevo btn btn-info btn-block" id="nuevo">Nuevo</button>
				</div>
				<div class="col-md-4">
					<button class="profesor btn btn-success btn-block" type="submit" name="guardar" id="guardar" disabled>Guardar</button>
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
