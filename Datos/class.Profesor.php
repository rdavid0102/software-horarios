<?php

	class Profesor
	{

			
       		function Nuevo_profesor($cedula,$nombres,$apellidos,$genero,$telefono,$celular,$email,$area,$imagen)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "INSERT INTO profesores (id, nombres, apellidos, sexo, telefono, 
			celular, email, area,imagen) VALUES ('$cedula', '$nombres', '$apellidos', '$genero', '$telefono', 
			'$celular', '$email', '$area', '$imagen')")or die(mysqli_error());
								
			mysqli_close($con); 	     		   
		}

			function Actualizar_profesor($cedula,$nombres,$apellidos,$genero,$telefono,$celular,$email,$area)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "UPDATE profesores SET nombres='$nombres', apellidos='$apellidos', sexo='$genero', telefono='$telefono', celular='$celular', email='$email',area='$area'
			WHERE id=".$cedula)or die(mysqli_error());
								
			mysqli_close($con); 	     		   
		}

		function Eliminar_profesor($cedula)
		{	
			include ('../Datos/conexion.php');
			mysqli_query($con, "DELETE FROM profesores WHERE id=".$cedula);
					
			mysqli_close($con); 		     		   
		}

		function Buscar_profesor($cedula)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM profesores WHERE id="."'$cedula'");
			$nre = mysqli_num_rows($re);
			return $nre;
							
			mysqli_close($con); 		     		   
		}
		function Cargar_profesores($apellidos)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM profesores WHERE apellidos LIKE '%".@$apellidos."%'");
			$nre = mysqli_num_rows($re);
			if($nre!=0){
					while ($f=mysqli_fetch_array($re)) {
					$arreglo[]=array('id'=>$f['id'],
					'nombres'=>$f['nombres'],'apellidos'=>$f['apellidos'], 'area'=>$f['area'],'sexo'=>$f['sexo'],
					'telefono'=>$f['telefono'],'celular'=>$f['celular'],'email'=>$f['email']);
				}
				return $arreglo;
			}
			return 'undefined';
			
			mysqli_close($con); 			     		   
		}
		function Cargar_profesores_id($id)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM profesores WHERE id=".$id);
			$nre = mysqli_num_rows($re);
			while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('id'=>$f['id'],
				'nombres'=>$f['nombres'],'apellidos'=>$f['apellidos'], 'area'=>$f['area']);
			}
			return $arreglo;
			mysqli_close($con); 			     		   
		}
		function Verificar_carga_profesor($id)
		{	
			include ('../Datos/conexion.php');
			$re=mysqli_query($con, "SELECT * FROM carga_academica WHERE id_profesor=".$id);
			
			$nre = mysqli_num_rows($re);
			return $nre;
			mysqli_close($con); 			     		   
		}
		function Cargar_carga_profesor($id)
		{	
			include ('../Datos/conexion.php');
			session_start();
			$datoshorario=$_SESSION['Horario'];
			$id_horario=$datoshorario[0]['id_horario'];
				
			$re=mysqli_query($con, "SELECT * FROM carga_academica, materias, curso, salones, profesores WHERE carga_academica.id_profesor=".$id." and carga_academica.id_horario="."$id_horario and carga_academica.id_asignatura=materias.id_materia and carga_academica.id_salon=salones.id_salon and carga_academica.id_curso=curso.id_curso and carga_academica.id_profesor=profesores.id");					
			
			while ($f=mysqli_fetch_array($re)) {
				$arreglo[]=array('id_carga'=>$f['id_carga'],
				'nom_curso'=>$f['nom_curso'],'num_salon'=>$f['num_salon'],'n_horas_week'=>$f['n_horas_week'],'nombres'=>$f['nombres'],
				'apellidos'=>$f['apellidos'],'nom_materia'=>$f['nom_materia'],'area'=>$f['area'],'id'=>$f['id'],'id_salon'=>$f['id_salon']);
			}
			return $arreglo;
			mysqli_close($con); 			     		   
		}



//$re=mysqli_query($con, "SELECT * FROM profesores WHERE apellidos LIKE '%".@$_GET['valor']."%'");
	
	}

?>