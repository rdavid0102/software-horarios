<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');

//include('./temples/menu_profesor.php')
?>
<script type="text/javascript" src="./js/carga_profesor.js"></script>
<body>
<BR>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">CARGA ACADEMICA-PROFESORES</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="POST" action="./controler/asignar_carga.php" role="form" name="form_carga_profesor" id="form_carga_profesor" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
						
					<div class="table-responsive">
						<table class="table table-bordered table-hover" id="lista_tabla_carga">
							<td colspan="4" rowspan="1" class="text-center info"><b>CARGA ACADEMICA PROFESORES <span id="nombres"></span></td>
							<tr class="info">						
								<th>Id Profesor</th>
								<th>Nombres y Apellidos</th>	
								<th>No H. X semana</th>		
							</tr>
					
							</table>
							<table class="table table-bordered table-hover">
							<td class="text-right"><b>Total de Horas por semana</td>
							<td class="success"><span id="total_cargas"></span><br></td>
							</table>
							<div class="alert alert-warning alert-dismissible" role="alert" id="carga_vacia">
							Lo sentimos! <strong>Ninguna carga academica asignada <span class="glyphicon glyphicon-alert"></span></strong> 
							</div>
							
					</div>
					
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<body>


</body>
</html>
