<?php 
	include ('../Datos/class.Horarios.php');	
	$clase=new  Horarios($_POST['nom_horario'],0);
	$id = $clase->Consultar_id_horario();

	/////
	$clase=new  Horarios(0,$id);
	$id = $clase->Eliminar_horario();
?>