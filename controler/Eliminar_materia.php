<?php 
	include ('../Datos/class.Materia.php');	

	
	$clase=new  Materia();
	$clase->Eliminar_Materia($_POST['id_materia']);
?>