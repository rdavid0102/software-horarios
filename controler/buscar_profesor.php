<?php	 	
include ('../Datos/class.Profesor.php');
$clase=new  Profesor();
$nreg = $clase->Buscar_profesor($_POST['cedula']);
echo $nreg;
?>