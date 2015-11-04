<?php 
	include ('../Datos/class.Carga.php');

	if($_POST['caso']=='editar'){

	}
		if($_POST['caso']=='eliminar'){
			$clase=new  Carga();
			$clase->Eliminar_carga($_POST['id_carga']);
		}
	
?>