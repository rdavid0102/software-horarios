<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0 ">
	<title>Login</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../css/estilos.css" />
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/login.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/ico.png">
</head>
<body>
	<header>
		<div class="navbar-fixed-top" id="nav_top">
			<div class="container">
				<div class="container-fluid"><center>
					<span class="glyphicon glyphicon-earphone"><span class="txt_fac_xs"> +</span>57<span class="txt_fac_xs_extrem"> </span>3013253722&nbsp;</span>
					<span class="glyphicon glyphicon-envelope hidden-xs"><span class="txt_fac_md"><span class="txt_fac_xs_extrem"> </span>info@sysem_acedemic.com</span>&nbsp;</span>
						</center>	
				</div>
			</div>
			
		</div>
		<section class="container" id="encabezado">
				<div class="rows">
					<div class="col-md-3">							
						<img src="../img/logo.png" width="100px" heigth="119xp" class="img-responsive">
					</div>
						<div class="col-md-6">	
						<br>
							<center>
								SISTEMA ACADEMICO
							<br>
								<span class="">FUNDACIÓN PIES DESCALZOS</span>				
							</center>		
						</div>
							<div class="col-md-3">							
								
							</div>
					</div>
						<div class="" id="">							
							
							</div>
												
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
		<a href="#" class="navbar-brand">ACADEMIC SYSTEM</a>
	</div>
	<!--Inicia el menu-->


	</div>
</nav>
	</header>

<BR>

		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-info">
				<div class="panel-heading">Restablecer Email</div>
				<div class="panel-body">	
					<form class="form-horizontal" role="form" method="POST" action="email.php" id="form_reset_email" name="form_reset_email">
						<input type="hidden" name="_token" value="va0g5o5oBistFTPAJ1IHq93m5OgMiquVvHa7df9W">

						<div class="form-group" id="group_email">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6" id="div_email">
								<input type="email" class="form-control" name="email" id="email" data-toggle="popover" data-placement="right" data-content="Ingrese una direccion de correo valida. Ejemplo: jane.doe@example.com">
							</div>
							<div class="text-danger" id="error">
								<span id="error_email"></span>
							</div>
						</div>

						<div class="form-group" id="group_email2">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="new_email btn btn-primary">
									Enviar email
								</button>
								<a class="btn btn-link" href="../"> Iniciar sesión</a> 
							</div>
						</div>
						<div class="form-group">
						<div class="col-xs-12 text-center hidden" id="start_session">
							<a class="btn btn-default" href="../"> Iniciar sesión</a> 
						</div>
						</div>
						<p>
						<div class="hidden alert alert-danger alert-dismissible" role="alert" id="alert_email">
							Ha ocurrido un error al enviar el email <strong>Verifique nuevamente su cuenta de email! <span class="glyphicon glyphicon-alert"></span></strong> 
						</div>
						<div class="hidden alert alert-success alert-dismissible" role="alert" id="ok_email">
							El mensaje ha sido enviado con exito <strong>La contraseña ha sido restablesida.</strong>  Verifique su cuenta de correo. Si dentro de los proximos 5 a 10 min no recibes el correo con tu nueva contraseña, <b>envia los datos nuevamente.<span class="glyphicon glyphicon-ok"></span>
						</div>
					</form>
				</div>
			</div>
		</div>
</body>
</html>
