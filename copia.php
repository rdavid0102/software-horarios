<?php
$caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890"; //posibles caracteres a usar
$numerodeletras=10; //numero de letras para generar el texto
$cadena = ""; //variable para almacenar la cadena generada
for($i=0;$i<$numerodeletras;$i++)
{
    $cadena .= substr($caracteres,rand(0,strlen($caracteres)),1); /*Extraemos 1 caracter de los caracteres 
entre el rango 0 a Numero de letras que tiene la cadena */
}
echo 'esta es la clave: '.$cadena;

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0 ">
	<title>Horarios</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/bootstrap-theme.css">
	<link rel="stylesheet" href="./css/estilos.css" />
	<script src="./js/jquery.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./js/scripts.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="imagenes/ico.png">
</head>
<?php
include('./temples/header.php');
?>
<body>
<BR>
<label class="" data-toggle="popover" title="Popover title" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">hola</label>

<label type="text" class="" data-container="body" data-toggle="popover" data-placement="left" title="Tooltip on left">hola2</label>


<button id="msn" type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
<br><br><br><br>

<label type="" class="" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</label>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>

<button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
<br><br>
<a href="" id="ayuda" data-toggle="tooltip" data-placement="left" title="este es el msj">hola mundo</a>
<br><br>
<div class="container-fluid">
<input class="form-control" id="email" data-toggle="popover" data-placement="bottom" data-content="And here's some amazing content. It's very engaging. Right?">
<br>
<input value=""><span class="glyphicon glyphicon-exclamation-sign text-warning"></span>
</div>
<script type="text/javascript">
$(function () {
  $('[data-toggle="popover"]').popover()
})

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})

$('#ayuda').tooltip('show')
$('#msn').popover('show')
$('#email').popover('show')

</script>

<br><br><br><br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">ACADEMIC SYSYTEM</h4>
      </div>
      <div class="modal-body">
        ¿Esta seguro que desea salir del sistema?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="cerrar_session btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>




