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
	if($_POST['caso']=="Eliminar"){
		$clase=new Profesor;
		$clase->Eliminar_profesor($_POST['cedula']);
		
	}
	if($_POST['caso']=="Modificar"){
		$clase=new Profesor;
		$clase->Actualizar_profesor($_POST["cedula"],$_POST["nombres"],$_POST["apellidos"],$_POST["genero"],
									$_POST["telefono"],$_POST["celular"],$_POST["email"],$_POST["area"]);
	}
	

?>