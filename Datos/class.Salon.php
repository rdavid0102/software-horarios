<?php

	class Salones
	{	
       		function Verificar_nom($nom_salon)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE num_salon=".$nom_salon);
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con); 		     		   
		}
		
		function Nuevo_salon($num_salon,$id_profesor,$id_asignatura,$id_horario)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO salones (num_salon,id_profesor,id_materia,id_horario) VALUES ('$num_salon','$id_profesor',
				'$id_asignatura','$id_horario')")or die(mysqli_error());					
			mysqli_close($con); 	     		        		   
		}
		function obtener_id($num_salon)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE num_salon=".$num_salon);
			$nre = mysqli_num_rows($re);
			if ($nre!=0){
				while ($f=mysqli_fetch_array($re)) {
					$numero[]=array('id_salon'=>$f['id_salon']);
				}
				return $numero[0]['id_salon'];
			}
			//return $nre;
			mysqli_close($con); 		     		   
		}
		function Verificar_aula_profesor($id_horario, $num_salon, $id_profesor, $id_materia)
		{	
			//echo 'id_salon: '.$num_salon.' id_horario: '.$id_horario.' id_materia: '.$id_materia.' id_profesor: '.$id_profesor;
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones WHERE num_salon=".$num_salon." and id_profesor=".$id_profesor." and id_materia=".$id_materia." and id_horario=".$id_horario);
			$nre = mysqli_num_rows($re);
			echo $nre;
			mysqli_close($con); 		     		   
		}
			function Cargar_salones($id_horario)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones, profesores, materias WHERE salones.id_horario=".$id_horario.' and salones.id_profesor=profesores.id and salones.id_materia=materias.id_materia');
			$nre = mysqli_num_rows($re);
			if ($nre!=0){
				while ($f=mysqli_fetch_array($re)) {
					$vector[]=array('id_salon'=>$f['id_salon'],'num_salon'=>$f['num_salon'],'nombres'=>$f['nombres'],'apellidos'=>$f['apellidos'],'nom_materia'=>$f['nom_materia']);
				}
				return $vector;
			}
			mysqli_close($con); 		     		   
		}
			function Cargar_detalles($id_salon)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM salones, profesores, materias WHERE salones.id_salon=".$id_salon." and salones.id_profesor=profesores.id and salones.id_materia=materias.id_materia");
			$nre = mysqli_num_rows($re);
			if ($nre!=0){
				while ($f=mysqli_fetch_array($re)) {
					$vector[]=array('id_salon'=>$f['id_salon'],'num_salon'=>$f['num_salon'],'nombres'=>$f['nombres'],'apellidos'=>$f['apellidos'],'nom_materia'=>$f['nom_materia']);
				}
				return $vector;
			}
			mysqli_close($con); 		     		   
		}
		function Actualizar_salon($id_salon,$num_salon)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE salones SET num_salon='$num_salon'
			WHERE id_salon=".$id_salon)or die(mysqli_error());						
			mysqli_close($con); 	     		   
		}

		
	}

?>