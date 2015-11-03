<?php

	class Curso
	{

			
       		function Nuevo_curso($nom_curso,$num_curso,$id_horario)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO curso (nom_curso, num_curso, id_horario) VALUES ('$nom_curso',
				'$num_curso', '$id_horario')")or die(mysqli_error());			
			mysqli_close($con); 	     		   
		}

			function Actualizar_curso($id_curso,$nom_curso,$num_curso)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE curso SET nom_curso='$nom_curso', num_curso='$num_curso'
			WHERE id_curso=".$id_curso)or die(mysqli_error());
								
			mysqli_close($con); 	     		   
		}

		function Eliminar_curso($id_curso)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "DELETE FROM curso WHERE id_curso=".$id_curso);
					
			mysqli_close($con); 		     		   
		}

		function Buscar_nom_curso($nom_curso,$id_horario)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM curso WHERE nom_curso="."'$nom_curso'"." and id_horario="."'$id_horario'");
			$nre = mysqli_num_rows($re);
			return $nre;
							
			mysqli_close($con); 		     		   
		}
		function Buscar_num_curso($num_curso)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM curso WHERE num_curso="."'$num_curso'");
			$nre = mysqli_num_rows($re);
			return $nre;
							
			mysqli_close($con); 		     		   
		}

		function Buscar_num_curso_num($id_curso)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM curso WHERE id_curso="."'$id_curso'");
			$f=mysqli_fetch_array($re);
	        $num_curso = $f['num_curso'];
			return $num_curso;		
			mysqli_close($con); 		     		   
		}
		function Cargar_cursos($id_horario)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM curso WHERE id_horario="."'$id_horario'");
				while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('id_curso'=>$f['id_curso'],
				'nom_curso'=>$f['nom_curso']);
			}
			return $arreglo;
			mysqli_close($con); 		     		   
		}


	
	}

?>