<?php 
	include ('../Datos/class.Salon.php');
	session_start();
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];
	////
	$clase=new  Salones();
	$ng=$clase->Verificar_aula_profesor($id_horario,$_POST['aula'],$_POST['id_profesor'],$_POST['combo_asignaturas']);
	//echo $id_horario.' '.$_POST['aula'].' '.$_POST['id_profesor'].' '.$_POST['combo_asignaturas'];
	echo $ng;

?>