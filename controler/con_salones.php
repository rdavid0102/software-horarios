<?php 
	include ('../Datos/class.Salon.php');
	session_start();
	$datoshorario=$_SESSION['Horario'];
	$id_horario=$datoshorario[0]['id_horario'];

		if($_POST['caso']=='cargar'){
			$clase=new  Salones();
			$vector = $clase->Cargar_salones($id_horario);
			echo json_encode($vector);
		}
		if($_POST['caso']=='detalles'){
			$clase=new  Salones();
			$vector = $clase->Cargar_detalles($_POST['id_salon']);
			echo json_encode($vector);
		}
		if($_POST['caso']=='actualizar'){
			$clase=new  Salones();
			$ng=$clase->Verificar_nom($_POST['num_salon']);
				if($ng==0){
					$clase=new  Salones();
					$clase->Actualizar_salon($_POST['id_salon'],$_POST['num_salon']);
					echo 1;
				}else{
					
				}
			
		}

	
?>