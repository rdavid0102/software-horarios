<?php 
	include ('../Datos/class.Profesor.php');

	$clase=new  Profesor();
	$nr = $clase->Verificar_carga_profesor($_POST['id']);
	if ($nr!=0) {
		$clase=new  Profesor();
		$vector = $clase->Cargar_carga_profesor($_POST['id']);
		echo json_encode($vector);
	}
	else{
		$clase=new  Profesor();
		$vector = $clase->Cargar_profesores_id($_POST['id']);
		echo json_encode($vector);
	}

	
?>