<?php 
	include "../Datos/class.Profesor.php";
	
	if($_POST['caso']=="cargar_tabla"){
		$clase=new Profesor;
		$vector=$clase->Cargar_profesores($_POST['text_buscar']);
		echo json_encode($vector);
		
	}
	if($_POST['caso']=="buscar"){
		$clase=new Profesor;
		$vector=$clase->Cargar_profesores_id($_POST["id"]);
		echo json_encode($vector);
	}
	

?>