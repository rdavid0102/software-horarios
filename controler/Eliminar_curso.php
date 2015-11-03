<?php 
	include ('../Datos/class.Curso.php');	
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];
	
	$clase=new  Curso();
	$clase->Eliminar_curso($_POST['id_curso']);
?>