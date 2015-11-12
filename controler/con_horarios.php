<?php	 	
include ('../Datos/class.Horarios.php');	

if($_POST['caso']=='cargar'){
	$clase=new  Horarios(0,0);
	$vector = $clase->Cargar_horarios();
		echo json_encode($vector);
}
if ($_POST['caso']=='nuevo') {
	$clase=new  Horarios($_POST["nom_horario"],0);
	$nreg = $clase->Consultar_nom_horario();

		if ($nreg==0) {
		$clase=new  Horarios($_POST["nom_horario"],0);
		$clase->Nuevo_horario();
	}
	echo $nreg;
}
	if($_POST['caso']=='modificar'){
		/////verifcar si el nombre existe
		$clase=new  Horarios($_POST['nom_new'],0);
		$nre = $clase->Consultar_nom_horario();
		////////////
		if ($nre==0) {
		/////actualizar
			$clase=new  Horarios($_POST['nom_new'],$_POST['id_horario']);
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
	}
		if($_POST['caso']=='eliminar'){
				$clase=new  Horarios(0,$_POST['id_horario']);
				$clase->Eliminar_horario();
		}
?>