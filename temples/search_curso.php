<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">BUSCAR CURSO</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
						<form class="form-horizontal" method="GET" action="" role="form" id="busqueda" name="busqueda">
							<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">	
							<div class="rows">
								<div class="form-group">
									<div class="col-md-10">
										<div class="input-group">
											<input type="text" class="form-control hidden-xs hidden-sm" id="buscar" name="buscar" placeholder="buscar">
											   <span class="input-group-btn hidden-xs hidden-sm">
													<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span></button>
											  </span>
										 </div>				
									</div>
									<div class="col-md-2">
										 	<select class="form-control" id="t_busqueda" name="t_busqueda">
										 		<option value="nom_curso">Nombre</option>
										 		<option value="num_curso">Numero</option>
										 	</select>
									</div>
								 </div>
							</div>
						</div>
									<script type="text/javascript">
										document.busqueda.buscar.focus();
									</script>
						</form>

		
				<div class="col-md-12"><br>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<tr class="info">						
								<th>Nombre</th>
								<th>Numero</th>				
							</tr>
								<?php
							include './Datos/conexion.php';
							$datoshorario=$_SESSION['Horario'];
							$id_horario=$datoshorario[0]['id_horario'];
							if (isset($_GET['t_busqueda'])) {
								$t_busqueda=$_GET['t_busqueda'];

							}else{
								$t_busqueda="nom_curso";
							}
							$re=mysqli_query($con, "SELECT * FROM curso WHERE id_horario=".$id_horario." and ".@$t_busqueda." LIKE '%".@$_GET['buscar']."%'"."ORDER BY nom_curso asc");
							while ($f=mysqli_fetch_array($re)) {?>
							<tr>
								<td><a href="./editar_curso.php? id= <?php echo $f['id_curso'];?>"><span><?php echo $f['nom_curso'];?></span></a>
								<br></td>		
								<td><span><?php echo $f['num_curso'];?></span><br></td>	
							</tr>
									<?php
							}						
						?></table>
							<?php 
						$nre = mysqli_num_rows($re);
						
						if ($nre==0) {
							echo '<div class="alert alert-warning alert-dismissible" role="alert" id="curso_vacio">
						      
						       Lo sentimos! <strong>El sistema no encontro ningun curso registrado <span class="glyphicon glyphicon-alert"></span></strong> 
					</div>';
						}?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>