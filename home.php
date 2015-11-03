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
				<div class="panel-heading"><h4 class="text-center">HORARIOS</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="" role="form" name="" id="" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
					<?php
						@$datoshorario=$_SESSION['Horario'];
						echo 'el numero de horario es '.@$datoshorario[0]['id_horario'].'<br>';
						echo 'el nombre de horario es '.@$datoshorario[0]['nom_horario'];
					?>
					</form>
				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
