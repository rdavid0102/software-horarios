<?php 
	include ('../Datos/class.Materia.php');
	session_start();
	
				$datoshorario=$_SESSION['Horario'];
				$id_horario=$datoshorario[0]['id_horario'];

				$clase=new  Materia();
				$vector=$clase->Cargar_materias($id_horario);
				
				echo json_encode($vector);
?>