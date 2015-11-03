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
				<div class="panel-heading"><h4 class="text-center">EDITAR PROFESOR</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/Editar_profesor.php" name="editar" id="editar">
						
						<?php
							include 'Datos/conexion.php';
							$re=mysqli_query($con, "select * from profesores where id=".$_GET['id'])or die(mysqli_error());
							while ($f=mysqli_fetch_array($re)) {
							?>
					<div class="form-group">
						<div class="col-md-8">
							<label for="cedula" class="control-label ">Cedula</label>
							<input class="form-control" type="text" name="cedula" id="cedula" value="<?php echo $f['id'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_cedula"></span>
							</div>
						</div>

						<div class="col-md-4" id="div_genero">
						<label for="genero" class="control-label ">Genero</label>
						<select class="form-control" name="genero" id="genero" disabled>
								<?php
								if ($f['sexo']=="Masculino") {
								?> <option><?php echo $f['sexo'];?></option>';
									<option>Femenino</option><?php
								}

								else{
									echo '<option>Femenino</option>
										<option>Masculino</option>';
								}
								?>
								
						</select>
							<div class="text-danger" id="error">
								<span id="error_genero"></span>
							</div>
					</div>

					</div>
					<div class="form-group">	
						<div class="col-md-4" id="div_nombres">
							<label for="nombre" class="control-label ">Nombres</label>
							<input class="form-control" type="text" name="nombres" id="nombres" value="<?php echo $f['nombres'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_nombres"></span>
							</div>
						</div>
						<div class="col-md-4" id="div_apellidos">
							<label for="apellidos" class="control-label ">Apellidos</label>
							<input class="form-control" type="text" name="apellidos" id="apellidos" value="<?php echo $f['apellidos'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_apellidos"></span>
							</div>
						</div>
						<div class="col-md-4" id="div_area">
							<label for="area" class="control-label ">Area</label>
							<input class="form-control" type="text" name="area" id="area" value="<?php echo $f['area'];?>" disabled>
							<div class="text-danger" id="error">
								<span id="error_area"></span>
							</div>
						</div>

					</div>
		
				<div class="form-group">
					<div class="col-md-3" id="div_telefono">
						<label for="telefono" class="control-label ">Telefono</label>
						<input class="form-control" type="text" name="telefono" id="telefono" value="<?php echo $f['telefono'];?>" disabled>
						<div class="text-danger" id="error">
								<span id="error_telefono"></span>
							</div>
					</div>
					<div class="col-md-3" id="div_celular">
						<label for="celular" class="control-label ">Celular</label>
						<input class="form-control" type="text" name="celular" id="celular" value="<?php echo $f['celular'];?>" disabled>
						<div class="text-danger" id="error">
								<span id="error_celular"></span>
							</div>
					</div>
					<div class="col-md-6" id="div_email">
						<label for="email" class="control-label ">Email</label>
						<input class="form-control" type="email" id="email" name="email" placeholder="jane.doe@example.com" value="<?php echo $f['email'];?>" disabled>
						<div class="text-danger" id="error">
								<span id="error_email"></span>
							</div>
					</div>
				</div>

			<div class="form-group">
				<div class="col-md-4">
					<button class="modificar btn btn-info btn-block" id="modificar">Editar</button>
					
				</div>
				<div class="col-md-4">
					<button class="actualizar btn btn-success btn-block" id="actualizar" disabled>Actualizar</button>
					
				</div>
				<div class="col-md-4">
					<button class="btn btn-danger btn-block" id="eliminar">Eliminar</button>
					
				</div>
				</div>
					</form>
				<?php
			}
				?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
