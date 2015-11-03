<?php 
	include ('../Datos/class.Curso.php');
	session_start();
	
				$datoshorario=$_SESSION['Horario'];
				$id_horario=$datoshorario[0]['id_horario'];

				$clase=new  Curso();
				$vector=$clase->Cargar_cursos($id_horario);
				echo json_encode($vector);
?>