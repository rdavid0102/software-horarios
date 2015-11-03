<?php
include('./Datos/class.Horarios.php');
			$clase=new  Horarios(0,0);
			$nreg = $clase->Consultar_horario();
			//echo "este es el numero de registros: ".$nreg;
			if ($nreg==0) {
				header("Location: ./nuevo_horario_home.php");
}
?>