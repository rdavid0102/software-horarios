<?php	 	
include ('../Datos/class.Horarios.php');	
$clase=new  Horarios($_POST["nom_horario"],0);
$nreg = $clase->Consultar_nom_horario();

if ($nreg==0) {
$clase=new  Horarios($_POST["nom_horario"],0);
$clase->Nuevo_horario();
}
echo $nreg;
?>