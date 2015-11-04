<?php 
	include ('../Datos/class.Carga.php');

	$clase=new  Carga();
	$vector = $clase->Cargar_carga_materia($_POST['id']);
	echo json_encode($vector);
?>