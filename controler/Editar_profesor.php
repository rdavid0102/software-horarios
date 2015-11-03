<?php 
	include "../Datos/class.Profesor.php";
	
	if($_POST['Caso']=="Eliminar"){
		$clase=new Profesor;
		$clase->Eliminar_profesor($_POST['cedula']);
		
	}
	if($_POST['Caso']=="Modificar"){
		$clase=new Profesor;
		$clase->Actualizar_profesor($_POST["cedula"],$_POST["nombres"],$_POST["apellidos"],$_POST["genero"],
									$_POST["telefono"],$_POST["celular"],$_POST["email"],$_POST["area"]);
	}
	

?>