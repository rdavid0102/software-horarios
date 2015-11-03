<?php 
	include ('../Datos/class.Curso.php');
	session_start();
	
	//$clase=new  Curso();
	//$nre=$clase->Buscar_nom_curso($_POST['nom_curso']);

	//if ($nre==0) {
	
				$datoshorario=$_SESSION['Horario'];
				$id_horario=$datoshorario[0]['id_horario'];

				$clase=new  Curso();
				$clase->Actualizar_curso($_POST['id_curso'],$_POST['nom_curso'],$_POST['num_curso']);
				$caso=0;
				echo $caso;
	
?>