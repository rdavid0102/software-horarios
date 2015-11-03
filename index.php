<?php
include('./admin/Login/class.login.php');
$clase=new  Login();
$nrg=$clase->Validar_Nuevo_Usuario();	
if ($nrg!=0) {
header("Location: ./admin/login.php?");
}else{

}
?>
<!DOCTYPE html>
<html lang="es">
<?php
include('./temples/head.php');
include('./temples/header.php');
?>
<body>
<BR>
<?php
include('./temples/new_usuario.php');
?>
</body>
</html>




