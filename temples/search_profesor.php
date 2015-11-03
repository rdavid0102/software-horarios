<div class="container-fluid">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading"><h4 class="text-center">BUSCAR PROFESOR</h4></div>
				<div class="panel-body">
					<div class="container-fluid">
					<form class="form-horizontal" method="GET" action="./buscar.php" role="form" id="busqueda" name="busqueda">
						<input type="hidden" name="_token" value="zooMTKtg7aWjvT6LdB9bMBQ8iFRVjJiRZXGy2eFx">
							<div class="input-group">
								<input type="text" class="form-control" id="buscar" name="buscar" placeholder="buscar">
								   <span class="input-group-btn">
										<button class="btn btn-info" type="submit"><span class="glyphicon glyphicon-search"></span></button>
								  </span>
							 </div>
					
						<script type="text/javascript">
							document.busqueda.buscar.focus();
						</script>
					</form>
					</div>
						<div class="col-md-12"><br>
							<div class="table-responsive">
								<table class="table table-bordered table-hover">
											<tr class="info">
												<th>Cedula</th>
												<th>Nombres</th>
												<th>Apellidos</th>
												<th>Sexo</th>
												<th>Area</th>
												<th>Telefono</th>
												<th>Celular</th>
												<th>Email</th>
											</tr>	<div>
								<?php
									include ('./Datos/conexion.php');
									$re=mysqli_query($con, "SELECT * FROM profesores WHERE apellidos LIKE '%".@$_GET['valor']."%'");
									while ($f=mysqli_fetch_array($re)) {?>
										<tr>
											<td><a href="./detalles.php? id= <?php echo $f['id'];?>"><span><?php echo $f['id'];?></span></a><br></td>
											<td><span><?php echo $f['nombres'];?></span></td>
											<td><span><?php echo $f['apellidos'];?></span></td>
											<td><span><?php echo $f['sexo'];?></span></td>
											<td><span><?php echo $f['area'];?></span></td>
											<td><span><?php echo $f['telefono'];?></span></td>
											<td><span><?php echo $f['celular'];?></span></td>
											<td><span><?php echo $f['email'];?></span></td>
										</tr>
									<?php
								}
									?></div>	</table>
							</div>
								<?php
									$numreg=mysqli_num_rows($re);
									if ($numreg==0) {
										echo '<div class="alert alert-warning alert-dismissible" role="alert">
							            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							                  Lo sentimos! no se encontraron resultados de tu <strong>Busqueda <span class="glyphicon glyphicon-search"></span></strong> 
							             </div>';
									}
									mysqli_close($con);
								?>
						</div><a href=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>