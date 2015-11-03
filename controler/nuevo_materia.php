<?php 
	include ('../Datos/class.Materia.php');
	session_start();
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];
	
	$clase=new Materia();
	$nre=$clase->Buscar_nom_materia($_POST['nom_materia'], $id_horario);

	if ($nre==0) {
				$clase=new Materia();
				$clase->Nuevo_materia($_POST['nom_materia'],$id_horario);
				echo $nre;
	}
	else{
		
		echo $nre;
	}
	
	
	
	

?>