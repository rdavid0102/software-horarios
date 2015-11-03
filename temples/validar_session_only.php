<?php
session_start();
if (isset($_SESSION["Usuario"])) {
			
			
}
	else{
		header("Location: ./admin/login.php?Error=Acceso denegado");
			

	}
?>