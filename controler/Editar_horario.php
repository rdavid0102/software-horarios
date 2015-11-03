<?php 
	include ('../Datos/class.Horarios.php');	
	$clase=new  Horarios($_POST['nom_horario'],0);
	$id = $clase->Consultar_id_horario();

	/////actualizo
	$clase=new  Horarios($_POST['nom_new'],0);
	$nre = $clase->Consultar_nom_horario();

	if ($nre==0) {
		$clase=new  Horarios($_POST['nom_new'],$id);
		$id = $clase->Modificar_horario();
		$caso=0;
		echo $caso;
	}else{
		
		if($_POST['nom_new']==$_POST['nom_horario']){
			$caso=0;
			echo $caso;
		}else{
			$caso=1;
			echo $caso;
		}

	}

	

	
	

?>