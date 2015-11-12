<?php 
	include ('../Datos/class.Profesor.php');
	
/////cargar carga profesor
if($_POST['caso']=='cargar_carga_profesor'){
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

}

///////nueva carga profesor
include ('../Datos/class.Carga.php');


if($_POST['caso']=='asignar_carga'){
	include ('../Datos/class.Salon.php');
		session_start();
		$datoshorario=$_SESSION['Horario'];
		$id_horario=$datoshorario[0]['id_horario'];
	////
	$clase=new  Salones();
	$nr = $clase->Verificar_nom($_POST['aula']);

	if ($nr==0) {
		$clase=new  Salones();
		$clase->Nuevo_salon($_POST['aula'],$_POST['id_profesor'],$_POST['combo_asignaturas'],$id_horario);
		///
		$clase=new  Salones();
		$num_salon = $clase->obtener_id($_POST['aula']);
		///////
		$clase=new  Carga();
		$clase->Nueva_carga($id_horario, $_POST['id_profesor'], $_POST['combo_asignaturas'], $_POST['combo_cursos'], $num_salon,
		$_POST['horas_dia'], $_POST['horas_semana']);
		///

		}else{
			///
		$clase=new  Salones();
		$num_salon = $clase->obtener_id($_POST['aula']);
		///////
			$clase=new  Carga();
			$clase->Nueva_carga($id_horario, $_POST['id_profesor'], $_POST['combo_asignaturas'], $_POST['combo_cursos'], $num_salon,
			$_POST['horas_dia'], $_POST['horas_semana']);
	}
}

/////editar carga profesor
if($_POST['caso']=='editar'){
		$clase=new  Carga();
		$clase->Actualizar_carga($_POST['id_carga'],$_POST['id_profesor'],$_POST['id_asignatura'],$_POST['id_curso'],$_POST['id_salon'],$_POST['n_horas_day'],$_POST['n_horas_week']);
	}

	//////eliminar cargan profesor
		if($_POST['caso']=='eliminar'){
			$clase=new  Carga();
			$clase->Eliminar_carga($_POST['id_carga']);
		}

		//////cargar lista carga profesor

		if($_POST['caso']=='cargar_lista'){
			session_start();
			$datoshorario=$_SESSION['Horario'];
			$id_horario=$datoshorario[0]['id_horario'];
			////////////
			$clase=new  Carga();
			$vector=$clase->cargar_lista($id_horario);
			echo json_encode($vector);
		}

	
?>