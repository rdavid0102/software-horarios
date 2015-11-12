<?php 
	include ('../Datos/class.Materia.php');
	session_start();
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];
	
	if ($_POST['caso']=='cargar_tabla') {
		$clase=new  Materia();
		$vector=$clase->Cargar_materias($_POST['buscar'],$id_horario);
		echo json_encode($vector);
	}

	if ($_POST['caso']=='nuevo') {

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
	
	}

	if ($_POST['caso']=='actualizar') {
		$clase=new  Materia();
		$clase->Actualizar_materia($_POST['id_materia'],$_POST['nom_materia']);
		$caso=0;
			echo $caso;
	}

	if ($_POST['caso']=='eliminar') {
		$clase=new  Materia();
		$clase->Eliminar_Materia($_POST['id_materia']);
	}
	
				if($_POST['caso']=='cargar_materia'){
					$clase=new  Materia();
					$vector=$clase->Cargar_materia($_POST['id_materia']);
						echo json_encode($vector);
				}
?>