<?php 
	include ('../Datos/class.Curso.php');
	session_start();
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];
	
	if ($_POST['caso']=='nuevo') {
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
	}

		if ($_POST['caso']=='actualizar') {
			$clase=new  Curso();
			$clase->Actualizar_curso($_POST['id_curso'],$_POST['nom_curso'],$_POST['num_curso']);
			$caso=0;
			echo $caso;
		}

			if ($_POST['caso']=='eliminar') {
				$clase=new  Curso();
				$clase->Eliminar_curso($_POST['id_curso']);
		}
	

		if ($_POST['caso']=='cargar_tabla') {
				$clase=new  Curso();
				$vector=$clase->cargar_tabla($_POST['buscar'],$id_horario);
				echo json_encode($vector);
		}
		
			if ($_POST['caso']=='buscar') {
				$clase=new  Curso();
				$vector=$clase->Buscar_curso($_POST['id_curso']);
				echo json_encode($vector);
		}
	

?>