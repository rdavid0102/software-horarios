<?php

	class Materia
	{

			
       		function Nuevo_materia($nom_materia,$id_horario)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO materias (nom_materia, id_horario) VALUES ('$nom_materia', 
				'$id_horario')")or die(mysqli_error());			
			mysqli_close($con); 	     		   
		}

			function Actualizar_materia($id_materia,$nom_materia)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE materias SET nom_materia='$nom_materia'
			WHERE id_materia=".$id_materia)or die(mysqli_error());
								
			mysqli_close($con); 	     		   
		}

		function Eliminar_Materia($id_materia)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "DELETE FROM materias WHERE id_materia=".$id_materia);
			mysqli_close($con); 		     		   
		}

		function Buscar_nom_materia($nom_materia,$id_horario)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM materias WHERE nom_materia="."'$nom_materia'"." and id_horario="."'$id_horario'");
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con); 		     		   
		}
		function Cargar_materias($buscar,$id_horario)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM materias WHERE id_horario=".$id_horario." and nom_materia LIKE '%".@$buscar."%'"."ORDER BY nom_materia asc");
				while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('id_materia'=>$f['id_materia'],
				'nom_materia'=>$f['nom_materia']);
			}
			return $arreglo;
			mysqli_close($con); 		     		   
		}


		function Cargar_materia($id_materia)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM materias WHERE id_materia="."'$id_materia'");
				while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('id_materia'=>$f['id_materia'],
				'nom_materia'=>$f['nom_materia']);
			}
			return $arreglo;
			mysqli_close($con); 	     		   
		}


	
	}

?>