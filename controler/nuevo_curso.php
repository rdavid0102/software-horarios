<?php 
	include ('../Datos/class.Curso.php');
	session_start();
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];
	
	$clase=new  Curso();
	$nre=$clase->Buscar_nom_curso($_POST['nom_curso'], $id_horario);

	if ($nre==0) {
				$clase=new  Curso();
				$clase->Nuevo_curso($_POST['nom_curso'],$_POST['num_curso'],$datoshorario[0]['id_horario']);
				echo $nre;
	}
	else{
		$caso=1;
		echo $caso;
	}
	
	
	
	

?>