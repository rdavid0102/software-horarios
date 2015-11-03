<?php
include "./Datos/conexion.php";
session_start();
$valor=($_GET['buscar']);
header("Location: buscar_profesor.php?valor=$valor");
///echo $_SESSION['valor'];
?>