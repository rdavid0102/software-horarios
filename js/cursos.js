var inicio=function () {
/////
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
//////////
function verficar_curso()
{
	var con=0;
	var nom_curso = $(".nom_curso").val();
	var num_curso = $(".num_curso").val();
	if (nom_curso=='') {
	$("#div_nom_curso").addClass("has-error");
	$("#error_nom_curso").text('*El nonmbre del curso no puede ser vacio');
	$("#duplicado").addClass("hidden");
	
	}
	else{
		con=con+1;
		$("#error_nom_curso").empty();
		$("#div_nom_curso").removeClass("has-error");
	}
		if (num_curso=='') {
		$("#div_num_curso").addClass("has-error");
		$("#error_num_curso").text('*El numero de estudiantes curso no puede ser vacio');
		$("#duplicado").addClass("hidden");
		}
		else{
			con=con+1;
			$("#error_num_curso").empty();
			$("#div_num_curso").removeClass("has-error");
		}
		return con
}
////////////////////////nuevo_curso
$(".nuevo_curso").click(function(e){
	e.preventDefault();
	var nom_curso = $(".nom_curso").val();
	var num_curso = $(".num_curso").val();

	var con = verficar_curso();
		if(con==2){
			$.post('./controler/con_curso.php',{
						nom_curso:nom_curso,
						num_curso:num_curso,
						caso:'nuevo'
					}, function(a){
						alert(a);
						$("#duplicado_nombre").addClass("hidden");
						$("#duplicado_numero").addClass("hidden");

						if (a==0) {
							alert('EL Curso se guardo con exito');
					
							location.href="./nuevo_curso_home.php";
							}
					if (a==1){
						$("#duplicado_numero").addClass("hidden");
						$("#div_nom_curso").removeClass("has-error");
						$("#duplicado_nombre").removeClass("hidden");
						}
						if (a==2){
						$("#duplicado_nombre").addClass("hidden");
						$("#div_nom_curso").removeClass("has-error");
						$("#duplicado_numero").removeClass("hidden");
						}
					});
			}
});	
/////////////////////editar curso
$("#editar_curso").click(function(e){
	e.preventDefault();
	document.getElementById("actualizar_curso").disabled = false
	document.getElementById("editar_curso").disabled = true
	document.getElementById("eliminar_curso").disabled = true
	document.getElementById("num_curso").disabled = false
	document.form_editar_curso.nom_curso.focus();
});	
///////////////////////////////actualizar curso
$("#actualizar_curso").click(function(e){
	e.preventDefault();
	var con = verficar_curso();
	var nom_curso = $(".nom_curso").val();
	var num_curso = $(".num_curso").val();
	var id_curso = $("#id_curso").val();
	if(con==2){
		$.post('./controler/con_curso.php',{
						id_curso:id_curso,
						nom_curso:nom_curso,
						num_curso:num_curso,
						caso:'actualizar'
					}, function(a){

						if (a==0) {
							alert('EL Curso se guardo con exito');
							location.href="./nuevo_curso_home.php";
						}else{
						///$("#div_nom_curso").removeClass("has-error");
						//$("#duplicado_numero").removeClass("hidden");
						}
					});
	}
	else{
		alert('Debe completar los Datos *obligatorios')
	}
});	

//////////////////eliminar_curso
$("#eliminar_curso").click(function(e){
e.preventDefault();
var id_curso=$(this).attr('data-id');
	
	if (confirm('¿Esta seguro de Eliminar el curso? WARNING: Toda la informacion asociada a este curso seria eliminada de la base de datos.')){
		$.post('./controler/con_curso.php',{
			id_curso:id_curso,
			caso:'eliminar'
		}, function(a){
			alert('El Curso ha sido eliminado con exito')
			location.href="./nuevo_curso_home.php";

		});
}
	else{

	}
});
///////cargar_tabla cursos
////////////////////
function cargar_tabla_cursos(tex_buscar){
	$.post('./controler/con_curso.php',{
				buscar:tex_buscar,
				caso:'cargar_tabla'

			},function(a){
				//alert(a);
			var json = eval(a);

						var tds=$("#tabla_cursos tr:first td").length;
						var trs=$("#tabla_cursos tr").length;
						var total=0;
	            		var nuevaFila="<tr>";
						$('#tabla_cursos tr:not(:first)').remove();
	            		//////si la carga academica es indfinida no mando a imprimir
	            if (typeof(json) != "undefined"){

					for(i=0; i<json.length; i++){
						
						nuevaFila="<tr>";
					 	nuevaFila+="<td><a href="+"'./editar_curso.php?id="+(json[i].id_curso)+"'>"+(json[i].nom_curso)+"</a></td> <td>"+(json[i].num_curso)+"</td>";
						nuevaFila+="</tr>";
	           		 	$("#tabla_cursos").append(nuevaFila);
	           		 	nuevaFila=" ";
	           		 }

	           		 $("#cursos_vacios").addClass("hidden");

	           	}
	           		//carga_vacia
			});
}

////////////lleno la tabla cursos si existe
if($("#tabla_cursos").length){
cargar_tabla_cursos($("#text_buscar").val());
}
/////
/////////////btn buscar por nombre
$("#btn_buscar").click(function(e){
	e.preventDefault();
	cargar_tabla_cursos($("#text_buscar").val());
});
	///////////////
$("#text_buscar").keyup(function(e){
	if(e.keyCode==13){
		cargar_tabla_cursos($("#text_buscar").val());
	}
});
	///////////cargar id de curso si existe una variable por get
		if(typeof(getUrlVars()['id']) != "undefined"){ 
		
			$.post('./controler/con_curso.php',{
				id_curso:(getUrlVars()['id']),
				caso:'buscar'
				},function(a){
					var json = eval(a);
					document.getElementById("nom_curso").value = (json[0].nom_curso);
						document.getElementById("num_curso").value = (json[0].num_curso);
							document.getElementById("id_curso").value = (json[0].id_curso);
				});
		}else{
		//alert('no existe');
	}
	///////

}
//$.post('',{},function(a){});
$(document).on('ready',inicio);