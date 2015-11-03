<?php 
	include ('../Datos/class.Profesor.php');
	$clase=new  Profesor();
		$vector = $clase->Cargar_profesores($_POST['apellidos']);

				echo json_encode($vector);
?>