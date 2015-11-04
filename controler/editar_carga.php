<?php 
	include ('../Datos/class.Carga.php');

	if($_POST['caso']=='editar'){
		$clase=new  Carga();
		$clase->Actualizar_carga($_POST['id_carga'],$_POST['id_profesor'],$_POST['id_asignatura'],$_POST['id_curso'],$_POST['id_salon'],$_POST['n_horas_day'],$_POST['n_horas_week']);
	}
		if($_POST['caso']=='eliminar'){
			$clase=new  Carga();
			$clase->Eliminar_carga($_POST['id_carga']);
		}
	
?>