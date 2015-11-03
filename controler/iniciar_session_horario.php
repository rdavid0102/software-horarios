<?php	 	
session_start();
include ('../Datos/conexion.php');		
$re=mysqli_query($con, "SELECT * FROM horarios WHERE nom_horario ='".$_GET['nom_horario']."'")or die(mysqli_error());
while ($f=mysqli_fetch_array($re)) {
	$arreglo[]=array('id_horario'=>$f['id_horario'],
			'nom_horario'=>$f['nom_horario']);
		$_SESSION['Horario']=$arreglo;

		header("Location: ../home.php");
	}

?>