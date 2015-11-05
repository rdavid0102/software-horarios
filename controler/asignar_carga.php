<?php 
	include ('../Datos/class.Carga.php');
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
	

	
?>