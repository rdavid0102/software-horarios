<?php
include('./temples/validar_session.php');
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<script type="text/javascript" src="./js/salones.js"></script>
<body>
<BR>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">SALONES</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
						<div class="table-responsive">
								<table class="table table-bordered table-hover" id="tabla_salones">
									<td colspan="4" rowspan="1" class="text-center info"><b>ASIGNACION DE SALONES</td>
									<tr class="info">						
										<th>No salon</th>
										<th>Profesor</th>
										<th>Materia</th>	
									</tr>
							</table>
						</div>
				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
