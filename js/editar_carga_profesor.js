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


///////////cargar_materias y cursos en los comobo//////////y elegir los asignados automato
function cargar_materia_combo(j,x) {
				
	$.post('./controler/con_materia.php',{	
		caso:'cargar_tabla',
		buscar:''	
		}, function(a){
			var json = eval(a);
			$("#combo_asignaturas").empty();

				$("<option>Seleccionar</option>").appendTo("#combo_asignaturas");

			for(i=0; i<json.length; i++){
				$("<option value="+(json[i].id_materia)+">"+(json[i].nom_materia)+"</option>").appendTo("#combo_asignaturas");
				}
				$('#combo_asignaturas > option[value="'+x+'"]').attr('selected', 'selected');
		});

		$.post('./controler/con_curso.php',{
			caso:'cargar_tabla',
			buscar:''
		}, function(e){
			var json = eval(e);
			$("#combo_cursos").empty();

				$("<option>Seleccionar</option>").appendTo("#combo_cursos");

			for(i=0; i<json.length; i++){
				$("<option value="+(json[i].id_curso)+">"+(json[i].nom_curso)+"</option>").appendTo("#combo_cursos");
				}
				$('#combo_cursos > option[value="'+j+'"]').attr('selected', 'selected');
		});	 

}
//////////////

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
function cargar_carga_materia() {

if(typeof(getUrlVars()['id_carga']) != "undefined"){ 
	var id = getUrlVars()['id_carga'];
			$.post('./controler/id_carga_profesor.php',{
				id:id
			},function(a){
				//alert(a);
			var json = eval(a);
	        
	            	document.form_carga_profesor.nombres.value=(json[0].nombres);
					document.form_carga_profesor.apellidos.value=(json[0].apellidos);
					document.form_carga_profesor.area.value=(json[0].area);
					document.form_carga_profesor.id_profesor.value=(json[0].id);
					document.form_carga_profesor.aula.value=(json[0].num_salon);
					document.form_carga_profesor.horas_dia.value=(json[0].n_horas_day);
					document.form_carga_profesor.horas_semana.value=(json[0].n_horas_week);
					document.form_carga_profesor.id_salon.value=(json[0].id_salon);
					//////cargamos los combos
					var a=(json[0].id_asignatura);
					var c=(json[0].id_curso);

					cargar_materia_combo(c,a);   
			});
           		
           		}
		else{ 
			
//////no hace nada
	}
}
/////////////////
///////////////////cargar carga academica de cada profesor pasado por get_ y llenado de tabla y datos
function cargar_datos_profesor() {

if(typeof(getUrlVars()['id']) != "undefined"){ 
	var id = getUrlVars()['id'];
			$.post('./controler/Cargar_carga_profesor.php',{
				id:id
			},function(a){
				//alert(a);
			var json = eval(a);
	        
	            	document.form_carga_profesor.nombres.value=(json[0].nombres);
	           		document.form_carga_profesor.apellidos.value=(json[0].apellidos);
	           		document.form_carga_profesor.area.value=(json[0].area);
	           		document.form_carga_profesor.id_profesor.value=(json[0].id); 
	           		document.form_carga_profesor.id_salon.value=(json[0].id_salon);
	           		if (typeof(json[0].id_salon) != "undefined") {
	           			document.form_carga_profesor.aula.value=(json[0].num_salon);
	           		}else{
	           			document.form_carga_profesor.aula.value='';
	           		}

	           		

			});
           		
           		}
		else{ 
			
//////no hace nada
	}
}
/////////////////cargo los datos de la carga academica seleccionada
cargar_carga_materia();
///////////////si eligen un cambio de profesor cargo datos de nuevo profesor///
cargar_datos_profesor();

///////editar_carga
function editar_cajas(){
document.getElementById("combo_asignaturas").disabled = false
document.getElementById("combo_cursos").disabled = false
document.getElementById("horas_dia").disabled = false
document.getElementById("horas_semana").disabled = false
document.getElementById("aula").disabled = false
}
////evento_btn_editar_carga
$("#btn_editar").click(function(e){
e.preventDefault();
	editar_cajas();
	document.getElementById("btn_asignar").disabled = false
		document.getElementById("btn_editar").disabled = true
			document.getElementById("btn_eliminar").disabled = true
				document.getElementById("menu_buscarprofesor").disabled = false
				$('#combo_asignaturas').focus();
	
});
////
////evento_btn_actualizar_carga
$("#btn_asignar").click(function(e){
e.preventDefault();
var id_carga = getUrlVars()['id_carga'];
var con=verificar_datos_carga();

		if(con==5){
			$.post('./controler/con_carga_profesor.php',{
				caso:'editar',
				id_carga:id_carga,
				id_profesor:$("#id_profesor").val(),
				id_asignatura:$("#combo_asignaturas").val(),
				id_curso:$("#combo_cursos").val(),
				id_salon:$("#id_salon").val(),
				n_horas_day:$("#horas_dia").val(),
				n_horas_week:$("#horas_semana").val()
					},function(a){
						//alert(a);
						alert('La carga academica ha sido asignada con exito');
						location.href="./carga_profesor.php?id=" + $("#id_profesor").val();
					});

		}else{
			alert('Debe completar todos los campos obligatorios')
		}

});
////
////evento_btn_delete_carga
$("#btn_eliminar").click(function(e){
	e.preventDefault();
	var id_carga = getUrlVars()['id_carga'];
	var id = getUrlVars()['id'];
	var con=verificar_datos_carga();

		if(confirm('¿Esta seguro eliminar la carga?')){
				$.post('./controler/con_carga_profesor.php',{
				caso:'eliminar',
				id_carga:id_carga
					},function(a){
						alert('La carga academica ha sido asignada con exito');
						location.href="./carga_profesor.php?id=" + $("#id_profesor").val();
					});
		}else{

		}
	

	});
////
}
$(document).on('ready',inicio);
/////////////////////iniciar//////////////////////$.post('',{},function(a){});
