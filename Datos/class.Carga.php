<?php

	class Carga
	{	
       		function Nueva_carga($id_horario, $id_profesor, $id_asignatura, $id_curso, $id_salon, $n_horas_day, $n_horas_week)
		{	
			//echo 'id horio: '.$id_horario.' id pro: '.$id_profesor.' id asi: '.$id_asignatura.' id curso: '.$id_curso.' id salon: '.$id_salon.' h dia: '.$n_horas_day.' h semana: '.$n_horas_week;
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO carga_academica (id_horario, id_profesor, id_asignatura, id_curso, 
			id_salon, n_horas_day, n_horas_week) VALUES ('$id_horario', '$id_profesor', '$id_asignatura', '$id_curso', '$id_salon', 
			'$n_horas_day', '$n_horas_week')")or die(mysqli_error());					
			mysqli_close($con); 	     		   
		}

		
	}

?>