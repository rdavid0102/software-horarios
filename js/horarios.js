var inicio=function () {
//////////
////////////////funcion para capturar el valor pasado por get
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
////////////////////
function cargar_horarios(){
	$.post('./controler/con_horarios.php',{	
		caso:'cargar'	
		}, function(a){
			//alert(a);
			var json = eval(a);
			$("#nom_horario").empty();

				//$("<option>Seleccionar</option>").appendTo("#nom_horario");

			for(i=0; i<json.length; i++){
				$("<option value="+(json[i].id_horario)+">"+(json[i].nom_horario)+"</option>").appendTo("#nom_horario");
				}
		});
	}
///////////////cargar horarios al inicio
cargar_horarios();

//////////nuevo_horario////////////////////
$(".nuevo_horario").click(function(e){
	e.preventDefault();
	var nom_horario = $(".nom_horario").val();
	$("#error_nom_horario").empty();

	if (nom_horario=='') {
		$("#div_nom_horario").addClass("has-error");
		$("#error_nom_horario").text('*El nonmbre del horario no puede ser vacio');
		$("#duplicado").addClass("hidden");

	}else{
	$.post('./controler/con_horarios.php',{
				nom_horario:nom_horario,
				caso:'nuevo'
			}, function(a){
				if (a==0) {
					alert('EL horario se guardo con exito');
					location.href="./controler/iniciar_session_horario.php?nom_horario="+nom_horario;
					}
			else{
				$("#div_nom_horario").removeClass("has-error");
				$("#duplicado").removeClass("hidden");
				
				}
			});
	}
	
});	
//////////////////////////
////////////////////////////////////////////////////editar_nom_horario
$("#editar_nom_horario").click(function(e){
e.preventDefault();
var nom_horario=$("#nom_horario option:selected").text();
var nom_new=$("#nombre").val();

	$.post('./controler/con_horarios.php',{
		nom_horario:nom_horario,
		nom_new:nom_new,
		id_horario:$("#nom_horario").val(),
		caso:'modificar'
	}, function(a){
		//alert(a);
		if(a==0){
		alert('El nombre ha sido actualizado con exito')
		location.href="./editar_horario.php";
	}
		else
		{
			alert('WARNING! El nombre de horario ya exite.')
			document.form_nom_horario.nombre.focus();
			$("#duplicado_nombre").removeClass("hidden");
		}

	});
});
////////////////pasar nombre del horario a modifacar al menu modal
$(".menu").click(function(e){
   var nom_horario=$("#nom_horario option:selected").text();
   document.form_nom_horario.nombre.value = nom_horario;
 });
////////////////
//////////////////////////////////////////eliminar_nom_horario
$("#eliminar_horario").click(function(e){
e.preventDefault();
var id_horario=$("#nom_horario").val();
var nom_horario=$("#nom_horario option:selected").text();
if (confirm('¿Esta seguro Que desea elimimar el horario '+nom_horario+'? WARNING! Recuerde que todos los datos asociados a este horario serian eliminados de la base de datos.')){
	$.post('./controler/con_horarios.php',{
		id_horario:id_horario,
		caso:'eliminar'
		}, function(a){
			alert('El horario ha sido eliminado con exito');
			location.href="./editar_horario.php";
		});
	}
});

//////////////
////////////////////////////////////


//////
}

$(document).on('ready',inicio);
/////////////////////iniciar//////////////////////$.post('',{},function(a){});

