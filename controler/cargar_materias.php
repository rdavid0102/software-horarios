<?php 
	include ('../Datos/class.Materia.php');
				if($_POST['caso']=='cargar_materias'){
					session_start();
					$datoshorario=$_SESSION['Horario'];
					$id_horario=$datoshorario[0]['id_horario'];

					$clase=new  Materia();
					$vector=$clase->Cargar_materias($id_horario);
						echo json_encode($vector);
				}
				if($_POST['caso']=='cargar_materia'){
					$clase=new  Materia();
					$vector=$clase->Cargar_materia($_POST['id_materia']);
						echo json_encode($vector);
				}
		
?>