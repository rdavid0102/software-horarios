var inicio=function () {


////////////
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
///////////////////cargar carga academica de cada profesor pasado por get_ y llenado de tabla y datos
function cargar_materia(){

if(typeof(getUrlVars()['id']) != "undefined"){ 
	var id_materia = getUrlVars()['id'];
			$.post('./controler/con_materia.php',{
				id_materia:id_materia,
				caso:'cargar_materia'
			},function(a){
				//alert(a);
			var json = eval(a);
				 if (typeof(json) != "undefined"){
				 	document.getElementById("nom_materia").value=(json[0].nom_materia);
				 	document.getElementById("id_materia").value=(json[0].id_materia);
				 }
		
					
			});
           		
      }

}
/////////////////inicio la busqueda del id de la materia
cargar_materia();
////cargar tabla materias

function cargar_tabla_materias(tex_buscar){
	$.post('./controler/con_materia.php',{
				buscar:tex_buscar,
				caso:'cargar_tabla'

			},function(a){
				///alert(a);
			var json = eval(a);

						var tds=$("#tabla_materias tr:first td").length;
						var trs=$("#tabla_materias tr").length;
						var total=0;
	            		var nuevaFila="<tr>";
						$('#tabla_materias tr:not(:first)').remove();
	            		//////si la carga academica es indfinida no mando a imprimir
	            if (typeof(json) != "undefined"){

					for(i=0; i<json.length; i++){
						
						nuevaFila="<tr>";
					 	nuevaFila+="<td><a href="+"'./editar_materia.php?id="+(json[i].id_materia)+"'>"+(json[i].id_materia)+"</a></td><td><a href="+"'./editar_materia.php?id="+(json[i].id_materia)+"'>"+(json[i].nom_materia)+"</a></td>";
						nuevaFila+="</tr>";
	           		 	$("#tabla_materias").append(nuevaFila);
	           		 	nuevaFila=" ";
	           		 }

	           		 $("#asignaturas_vacias").addClass("hidden");

	           	}
	           		//carga_vacia
			});
}

//////si la tabla existe las lleno con datos
if ($("#tabla_materias").length) {
	cargar_tabla_materias($("#text_buscar").val());
}else{
	//alert('no hay tabla !!!!');
}
//////////////////////////////


/////////////btn buscar por nombre
$("#btn_buscar").click(function(e){
	e.preventDefault();
	cargar_tabla_materias($("#text_buscar").val());
});
	///////////////
$("#text_buscar").keyup(function(e){
	if(e.keyCode==13){
		cargar_tabla_materias($("#text_buscar").val());
	}
});
/////////////
///////verifiacar materias
function verificar_materia()
{
	var con=0;
	var nom_materia = $(".nom_materia").val();
		if (nom_materia=='') {
		$("#div_nom_materia").addClass("has-error");
		$("#error_nom_materia").text('*El nonmbre no puede ser vacio');
		$("#duplicado").addClass("hidden");
		
		}
		else{
			con=con+1;
			$("#error_nom_materia").empty();
			$("#div_nom_materia").removeClass("has-error");
		}
		return con
}
/////////////nueva_materia
$(".nuevo_materia").click(function(e){
	e.preventDefault();
	var nom_materia = $(".nom_materia").val();
	var con = verificar_materia();
			if(con==1){
				$.post('./controler/con_materia.php',{
							nom_materia:nom_materia,
							caso:'nuevo'
							
						}, function(a){

							$("#duplicado").addClass("hidden");
							if (a==0) {
								alert('La Nueva asignatura se ha credos con exito');
								location.href="./nueva_materia.php";
								}
						if (a==1){
							$("#div_nom_materia").removeClass("has-error");
							$("#duplicado").removeClass("hidden");
							}	
						});
			}
});	

////////////editar_materia
$("#editar_materia").click(function(e){
	e.preventDefault();
	document.getElementById("actualizar_materia").disabled = false
	document.getElementById("nom_materia").disabled = false
	document.getElementById("editar_materia").disabled = true
	document.getElementById("eliminar_materia").disabled = true
	document.form_editar_materia.nom_materia.focus();
});	
///////////////////////////////actualizar_materia
$("#actualizar_materia").click(function(e){
	e.preventDefault();
	var con = verificar_materia();
	var nom_materia = $("#nom_materia").val();
	var id_materia=$("#id_materia").val();

	if(con==1){
		$.post('./controler/con_materia.php',{
						id_materia:id_materia,
						nom_materia:nom_materia,
						caso:'actualizar'
					}, function(a){
						if (a==0) {
							alert('El nuevo nombre de la asignatura se guardo con exito');
							location.href="./nueva_materia.php";
						}else{
						$("#div_nom_materia").removeClass("has-error");
						$("#duplicado").removeClass("hidden");
						}
					});
	}
	else{
		alert('Debe completar los Datos *obligatorios')
	}

});	
//////////////////eliminar_ASIGNATURA
$("#eliminar_materia").click(function(e){
e.preventDefault();
var nom_materia = $("#nom_materia").val();
var id_materia= $("#id_materia").val();
	if (confirm('¿Esta seguro de Eliminar la asignatura '+nom_materia+'? WARNING: Toda la informacion asociada a esta asignatura seria eliminada de la base de datos.')){
	$.post('./controler/con_materia.php',{
		id_materia:id_materia,
		caso:'eliminar'
	}, function(a){
		alert('La asignatura ha sido eliminada con exito')
		location.href="./nueva_materia.php";
	});
}
	else{
	}
});

/////

}
$(document).on('ready',inicio);
////////////////






