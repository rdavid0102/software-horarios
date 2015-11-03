<?php
session_start();
if (isset($_SESSION["Usuario"])) {
	if (isset($_SESSION["Horario"])) {
	
}
	else{
		header("Location: ./horarios.php?Error=Acceso denegado");
	}

}
else
{
	header("Location: ./admin/login.php?Error=Acceso denegado");
}

?>