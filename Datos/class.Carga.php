<?php

	class Carga
	{	
       		function Nueva_carga($id_horario, $id_profesor, $id_asignatura, $id_curso, $id_salon, $n_horas_day, $n_horas_week)
		{
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO carga_academica (id_horario, id_profesor, id_asignatura, id_curso, 
			id_salon, n_horas_day, n_horas_week) VALUES ('$id_horario', '$id_profesor', '$id_asignatura', '$id_curso', '$id_salon', 
			'$n_horas_day', '$n_horas_week')")or die(mysqli_error());					
			mysqli_close($con); 	     		   
		}

		function cargar_carga_materia($id){
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM carga_academica, materias, curso, salones, profesores WHERE carga_academica.id_carga=".$id." and carga_academica.id_asignatura=materias.id_materia and carga_academica.id_salon=salones.id_salon and carga_academica.id_curso=curso.id_curso and carga_academica.id_profesor=profesores.id");					
			
			while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('id_carga'=>$f['id_carga'],
				'nom_curso'=>$f['nom_curso'],'num_salon'=>$f['num_salon'],'n_horas_week'=>$f['n_horas_week'],'nombres'=>$f['nombres'],
				'apellidos'=>$f['apellidos'],'nom_materia'=>$f['nom_materia'],'area'=>$f['area'],'id'=>$f['id'],
				'n_horas_day'=>$f['n_horas_day'],'id_asignatura'=>$f['id_asignatura'],'id_curso'=>$f['id_curso']);
			}
			return $arreglo;
			mysqli_close($con); 	
		}
		function Eliminar_carga($id_carga)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "DELETE FROM carga_academica WHERE id_carga=".$id_carga);	
			mysqli_close($con); 		     		   
		}

		
	}

?>