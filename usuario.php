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
				<div class="panel-heading"><h4 class="text-center">USUARIO</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/cambiar_password.php" role="form" name="form_cambiar_password" id="form_cambiar_password" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
						<div class="form-group">
			<div class="col-xs-12">
				<label class="label-goti">Información Personal</label>
			</div>	
			<div class="col-xs-12">
				<hr>
			</div>
		</div>
		<?php
		$datosusuario=$_SESSION['Usuario'];
		?>
							<div class="form-group">
						<div class="col-md-8" id="div_cedula">
							<label for="cedula" class="control-label ">Cedula</label>
							<input class="form-control" type="text" name="cedula" id="cedula" value="<?php echo @$datosusuario[0]['id'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_cedula"></span>
							</div>
						</div>

						<div class="col-md-4" id="div_genero">
						<label for="genero" class="control-label ">Genero</label>
						<select class="form-control" name="genero" id="genero" disabled>
								<option><?php echo @$datosusuario[0]['genero'];?></option>
								
						</select>
							<div class="text-danger" id="error">
								<span id="error_genero"></span>
							</div>
					</div>
				</div>
					<div class="form-group">	
						<div class="col-md-6" id="div_nombres">
							<label for="nombre" class="control-label ">Nombres</label>
							<input class="form-control" type="text" name="nombres" id="nombres" value="<?php echo @$datosusuario[0]['nombres'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_nombres"></span>
							</div>
						</div>
						<div class="col-md-6" id="div_apellidos">
							<label for="apellidos" class="control-label ">Apellidos</label>
							<input class="form-control" type="text" name="apellidos" id="apellidos" value="<?php echo @$datosusuario[0]['apellidos'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_apellidos"></span>
							</div>
						</div>
					</div>
		
				<div class="form-group">

					<div class="col-md-8" id="div_email">
						<label for="email" class="control-label ">Email</label>
						<input class="form-control" type="email" id="email" name="email" placeholder="jane.doe@example.com" value="<?php echo @$datosusuario[0]['email'];?>" disabled>
							<div class="text-danger" id="error">
									<span id="error_email"></span>
							</div>
					</div>
					<div class="col-md-4">
						<label for="imagen" class="control-label ">Imagen</label>
						<input class="form-control" type="file" name="file" id="imagen" disabled>
					</div>
				</div>
						<p>
						<div class="form-group">
							<div class="col-xs-12">
								<label class="label-goti">Cambiar Contraseña</label>
							</div>	
							<div class="col-xs-12">
					 			<hr>
					 		</div>
				 		</div>
				 		
					<div class="form-group">
							<div class="col-xs-12" id="div_password">
								<label class="control-label">Contraseña</label>
								<input class="form-control" type="password" id="password" name="password" placeholder="Password" >
									<div class="text-danger" id="error">
										<span id="error_password"></span>
									</div>
							</div>
					</div>	

		
					<div class="form-group">
							<div class="col-xs-12" id="div_password1">
								<label class="control-label">Nueva Contraseña</label>
								<input class="form-control" type="password" id="password1" name="password1" placeholder="" >
								<div class="text-danger" id="error">
											<span id="error_password1"></span>
									</div>
						</div>
					</div>	

					<div class="form-group">
							<div class="col-xs-12" id="div_password2">
								<label class="control-label">Confirmar Nueva Contraseña</label>
								<input class="form-control" type="password" id="password2" name="password2" placeholder="" >
									<div class="text-danger" id="error">
											<span id="error_password2"></span>
									</div>
						</div>
					</div>	
					
				<div class="form-group">
					<div class="col-xs-6">
						<a class="cancelar btn btn-info btn-block" href="./home.php">Home</a>
					</div>
					<div class="col-xs-6">
						<button class="cambiar_password btn btn-primary btn-block">Enviar</button>
					</div>
				</div>
					
					</form>
				<script type="text/javascript">
				document.form_cambiar_password.password.focus();
				</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
