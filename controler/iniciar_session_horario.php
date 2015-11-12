<?php	 
include ('../Datos/class.Horarios.php');

if (isset($_GET['nom_horario'])) {
	$clase=new  Horarios(0,$_GET['nom_horario']);
	$clase->Iniciar_horario();
	}	
	header("Location: ../home.php");
?>