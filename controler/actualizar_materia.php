<?php 
	include ('../Datos/class.Materia.php');
	session_start();
	
	//$clase=new  Curso();
	//$nre=$clase->Buscar_nom_curso($_POST['nom_curso']);

	//if ($nre==0) {
	
				$datoshorario=$_SESSION['Horario'];
				$id_horario=$datoshorario[0]['id_horario'];

				$clase=new  Materia();
				$clase->Actualizar_materia($_POST['id_materia'],$_POST['nom_materia']);
				$caso=0;
				echo $caso;
	
?>