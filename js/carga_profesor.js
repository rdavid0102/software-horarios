var inicio=function () {

function verificar_datos_carga(){
var con=0;
if(isNaN($('#combo_asignaturas').val())) {
$("#error_combo_asignatura").text('*Selecciona una asignatura');
}
	else
	{
		$('#error_combo_asignatura').empty();
		var con=con+1;
		
	}
		if(isNaN($("#horas_semana").val()) || $("#horas_semana").val() > 84 || $("#horas_semana").val().length == 0 || $("#horas_semana").val() == 0) {
			$("#div_horas_semana").addClass("has-error");
			$("#error_horas_semana").text('*Valor invalido');
		}
			else
			{
				$("#div_horas_semana").removeClass("has-error");
				$("#error_horas_semana").empty();
				var con=con+1;	
			}
				if(isNaN($("#horas_dia").val()) || $("#horas_dia").val() > 24 || $("#horas_dia").val().length == 0 || $("#horas_dia").val() == 0 || parseFloat($('#horas_dia').val()) > parseFloat($('#horas_semana').val())) {
				$("#div_horas_dia").addClass("has-error");
				$("#error_horas_dia").text('*Valor invalido');
				}
					else
					{
					$("#div_horas_dia").removeClass("has-error");
					$("#error_horas_dia").empty();	
					var con=con+1;
					}
						if(isNaN($('#combo_cursos').val())) {
						$("#error_combo_cursos").text('*Selecciona un curso');
						}
							else
							{
								$('#error_combo_cursos').empty();
								var con=con+1;
							}
								if(isNaN($("#aula").val()) || $("#aula").val().length == 0) {
								$("#div_aula").addClass("has-error");
								$("#error_aula").text('*Valor invalido');
								}
									else
									{
									$("#div_aula").removeClass("has-error");
									$("#error_aula").empty();
									var con=con+1;	
									}
										if( parseFloat($('#horas_dia').val()) > parseFloat($('#horas_semana').val())) {
										alert('El numero de horas diarias no puede ser mayor al numero de horas semanales')
										}

										return con
}

$("#asignar_carga").click(function(e){
var combo_asignaturas=$("#combo_asignaturas").val();
var id_profesor=$("#id_profesor").val();
var horas_semana=$("#horas_semana").val();
var horas_dia=$("#horas_dia").val();
var combo_cursos=$("#combo_cursos").val();
var aula=$("#aula").val();
	var con=verificar_datos_carga();	

	///////////////funcion enviar datos, asignar carga
	function enviar_datos(){
			if(con==5){
			$.post('./controler/con_carga_profesor.php',{
				id_profesor:id_profesor,
				combo_asignaturas:combo_asignaturas,
				combo_cursos:combo_cursos,
				aula:aula,
				horas_dia:horas_dia,
				horas_semana:horas_semana,
				caso:'asignar_carga'

				},function(a){
					alert('La carga academica ha sido asignada con exito')
					location.href="carga_profesor.php?id="+id_profesor;

				});
		}else{
			alert('Debe completar todos los datos obligatorios');
		}
	}
	/////////////////fin-funcion enviar datos
	$.post('./controler/verificar_aula.php',{
		combo_asignaturas:combo_asignaturas,
		aula:aula,
		id_profesor:id_profesor
		},function(e){
			//alert(e);
			if (e==0) {

				if (confirm('El profesor '+ $('#nombres').val() +' '+ $('#apellidos').val() +' No se encuentra asociado a el curso '+aula+' o a la asignatura Seleccionada. ¿Igual desea asociarlo?')){
				////////envio datos
				enviar_datos();
				}else{
					////////no envio datos
				}
			}else{
				//////enviar datos
				enviar_datos();
			}
			
	});
////////////////
							
});

}
$(document).on('ready',inicio);
////////////////

///////////cargar_materias
$(function() {
				
	$.post('./controler/con_materia.php',{
	buscar:'',
	caso:'cargar_tabla'		
		}, function(a){
		
			var json = eval(a);
			$("#combo_asignaturas").empty();

				$("<option>Seleccionar</option>").appendTo("#combo_asignaturas");

			for(i=0; i<json.length; i++){
				$("<option value="+(json[i].id_materia)+">"+(json[i].nom_materia)+"</option>").appendTo("#combo_asignaturas");
				}
		});

		$.post('./controler/cargar_cursos.php',{
				
		}, function(e){
			var json = eval(e);
			$("#combo_cursos").empty();

				$("<option>Seleccionar</option>").appendTo("#combo_cursos");

			for(i=0; i<json.length; i++){
				$("<option value="+(json[i].id_curso)+">"+(json[i].nom_curso)+"</option>").appendTo("#combo_cursos");
				}
		});	 

})
//////////////







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
$(function() {

if(typeof(getUrlVars()['id']) != "undefined"){ 
	var id = getUrlVars()['id'];
			$.post('./controler/con_carga_profesor.php',{
				id:id,
				caso:'cargar_carga_profesor'
			},function(a){
				//alert(a);
			var json = eval(a);

						var tds=$("#tabla_carga tr:first td").length;
						var trs=$("#tabla_carga tr").length;
						var total=0;
	            		var nuevaFila="<tr>";
	            		//alert(json[0].id_carga);
	            		//////si la carga academica es indfinida no mando a imprimir
	            if (typeof(json[0].id_carga) != "undefined"){

					for(i=0; i<json.length; i++){
						
						nuevaFila="<tr>";
					 	nuevaFila+="<td><a href="+"'./editar_carga_profesor.php?id_carga="+(json[i].id_carga)+"'>"+(json[i].nom_materia)+"</a></td> <td>"+(json[i].nom_curso)+"</td> <td>"+(json[i].num_salon)+"</td> <td>"+(json[i].n_horas_week)+"</td>";
						nuevaFila+="</tr>";
	           		 	$("#tabla_carga").append(nuevaFila);
	           		 	nuevaFila=" ";
	           		 	var horas=(json[i].n_horas_week);
	           		 	var total=parseFloat(horas)+parseFloat(total);

	           		 }
	           		 $("#carga_vacia").addClass("hidden");

	           	}
	           		//carga_vacia
	           		$("#total").text(total);
	           		document.form_carga_profesor.nombres.value=(json[0].nombres);
	           		document.form_carga_profesor.apellidos.value=(json[0].apellidos);
	           		document.form_carga_profesor.area.value=(json[0].area);
	           		document.form_carga_profesor.id_profesor.value=(json[0].id);

	           		//carga_vacia
					
			});
           		
           		}
		else{ 
			
//////no hace nada
	}


	/////////////////cargar todas las cargas acedemicas



	////////////////////cargar la carga academica de todos los profesores
function cargar_tabla_cargas_academicas(){
	$.post('./controler/con_carga_profesor.php',{
				caso:'cargar_lista'
			},function(a){
				//alert(a);
			var json = eval(a);

						var tds=$("#lista_tabla_carga tr:first td").length;
						var trs=$("#lista_tabla_carga tr").length;
						var total=0;
	            		var nuevaFila="<tr>";
	
	            		//////si la carga academica es indfinida no mando a imprimir
	            if (typeof(json) != "undefined"){

					for(i=0; i<json.length; i++){
						
						nuevaFila="<tr>";
					 	nuevaFila+="<td><a href="+"'./carga_profesor.php?id="+(json[i].id_profesor)+"'>"+(json[i].id_profesor)+"</a></td> <td>"+(json[i].nombres)+" "+(json[i].apellidos)+"</td> <td>"+(json[i].sum)+"</td>";
						nuevaFila+="</tr>";
	           		 	$("#lista_tabla_carga").append(nuevaFila);
	           		 	nuevaFila=" ";
	           		 	var horas=(json[i].sum);
	           		 	var total=parseFloat(horas)+parseFloat(total);
	           		 }
	           		 $("#carga_vacia").addClass("hidden");


	           	}
	           		$("#total_cargas").text(total);
	           		//carga_vacia

			});
}

cargar_tabla_cargas_academicas();

//////
});
/////////////////
