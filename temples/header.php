<header>
	<div class="navbar-fixed-top" id="nav_top">
		<div class="container">
			<div class="container-fluid"><center>
				<span class=""><span class="txt_fac_xs"></span><span class="txt_fac_xs_extrem"> </span>ACADEMIC SYSYTEM&nbsp;</span>
				<span class="glyphicon glyphicon-envelope hidden-xs"><span class="txt_fac_md"><span class="txt_fac_xs_extrem"> </span>info@sysem_acedemic.com</span>&nbsp;</span>
				</center>	
			</div>
		</div>	
	</div>
		<section class="container" id="encabezado">
			<div class="rows">
				<div class="col-md-3">							
					<img src="./img/logo.png" width="100px" heigth="119xp" class="img-responsive">
				</div>
					<div class="col-md-6"><br>
						<center>
							SISTEMA ACADEMICO
						<br>
							<span class="">FUNDACIÓN PIES DESCALZOS</span>				
						</center>		
					</div>
							<div class="col-md-3"></div>
			</div>
				<div class="" id=""></div>									
		</section>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-rp">
			<span class="sr-only">Desplegar / Ocultar Menu</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>	
		<a href="#" class="navbar-brand">Horarios</a>
	</div>
	<!--Inicia el menu-->
	<div class="collapse navbar-collapse" id="navegacion-rp"> 
		<?php 
			if (isset($_SESSION['Horario'])) {
		?>
		<ul class="nav navbar-nav">			
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					Agregar <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li class="#"><a href="profesores.php">Profesor</a></li>
					<li class="#"><a href="./nuevo_curso_home.php">Curso</a></li>
					<li class="#"><a href="./nueva_materia.php">Materia</a></li>
					<li class="#"><a href="./nuevo_horario_home.php">Horario</a></li>

				</ul>
			</li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
					Editar <span class="caret"></span>
				</a>
				<ul class="dropdown-menu" role="menu">
					<li class="#"><a href="buscar_profesor.php">Profesor</a></li>
					<li class="#"><a href="./buscar_curso_home.php">Curso</a></li>
					<li class="#"><a href="./buscar_materia.php">Materia</a></li>
					<li class="#"><a href="./editar_horario.php">Horario</a></li>
					<li class="#"><a href="./salones.php">salones</a></li>
				
				</ul>
			</li>
			<li class="#"><a data-toggle="modal" data-target="#myModal">Salir</a></li>
		</ul><?php } ?>

			<form action="" class="navbar-form navbar-right" role="search">
				<div class="form-group">
				<a href="./user.php" class="glyphicon glyphicon-user btn btn-info" data-toggle="tooltip" data-placement="left" title="Nuevo Usuario" id="popover_user"></a>
				<?php
				if(isset($_SESSION['Usuario'])) 
								{?>
									<button class="hidden-sm hidden-xs btn btn-info dropdown-toggle" type="button" id="dropdownmenu1" data-toggle="dropdown" aria-extended="true">
											<?php
											@$datosusuario=$_SESSION['Usuario'];
											echo 'Hola '.@$datosusuario[0]['nombres'];
											?> 
										<span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownmenu1">
										<li role="presentation"> <a role="item" href="usuario.php">Mi cuenta</a></li>
										<li role="presentation" class="divider"></li>
									
										<li role="presentation"> <a role="item" data-toggle="modal" data-target="#myModal">Salir</a></li>
									</ul>
									<?php
								}
								else
								{
									
								}
								
								?>
			</form>

		</div>
	</div>
</nav>
</header>
<?php include('menu_salir.php'); ?>