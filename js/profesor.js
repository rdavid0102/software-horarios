var inicio=function () {
function verficar()
{
var con=0;
var expr1 = /^([a-z ñáéíóú]{2,60})$/i;
				if ($("#cedula").val().length > 10 || isNaN($('#cedula').val()) || $("#cedula").val().length < 6) {
						$("#error_cedula").text('*Numero invalido');
						//$('#div_cedula').attr("class", "has-error");
						$("#div_cedula").addClass("has-error");
				}
					else{
						$("#div_cedula").removeClass("has-error");
						$("#error_cedula").empty();
						var cedula = $("#cedula").val();
						var con=con+1;
					}
						if ($("#genero").val()!='') {
							$("#div_genero").removeClass("has-error");
							$("#error_genero").empty();
								var genero = $("#genero").val();
								var con=con+1;
							}
							else{
								$("#error_genero").text('*Debe seleccionar una opción');
								$("#div_genero").addClass("has-error");
							}
								if ($("#nombres").val().length < 3 || !expr1.test($("#nombres").val()) ) {
										$("#error_nombres").text('*Nombre invalido');
										$("#div_nombres").addClass("has-error");
									}
									else{
										$("#div_nombres").removeClass("has-error");
										$("#error_nombres").empty();
										var nombres = $("#nombres").val();
										var con=con+1;
									}
										if ($("#apellidos").val().length < 3 || !expr1.test($("#apellidos").val()) ) {
												$("#error_apellidos").text('*Apellido invalido');
												$("#div_apellidos").addClass("has-error");
											}
											else{
												$("#div_apellidos").removeClass("has-error");
												$("#error_apellidos").empty();
													var apellidos = $("#apellidos").val();
													var con=con+1;
											}
											if( !(/^\d{10}$/.test($("#celular").val())) ) {
													$("#error_celular").text('*Numero invalido');
													$("#div_celular").addClass("has-error");
													}
													else{
														$("#div_celular").removeClass("has-error");
														$("#error_celular").empty();
															var celular = $("#celular").val();
															var con=con+1;
														
													}
															 	 var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
			 
																    //Se utiliza la funcion test() nativa de JavaScript
																    if (regex.test($('#email').val().trim())) {
																    	$("#error_email").empty();
																    	$("#div_email").removeClass("has-error");
																    	var email = $("#email").val();
																    	var con=con+1;
																    	}
																    	 else {
																	$("#error_email").text('*email invalido');
																	$("#div_email").addClass("has-error");
																    }
																		if ($("#area").val()!='') {
																				$("#error_area").empty();
																				$("#div_area").removeClass("has-error");
																					var area = $("#area").val();
																					var con=con+1;
																				}
																				else{
																					$("#error_area").text('*Campo oblitario');
																					$("#div_area").addClass("has-error");
																				}
																					if (isNaN($("#telefono").val())) {
																						$("#div_telefono").addClass("has-error");
																						$("#error_telefono").text('*Numero invalido');
																						var con=con-1;
																					}
																					else{
																						var telefono = $("#telefono").val();
																						$("#error_telefono").empty();
																    					$("#div_telefono").removeClass("has-error");

																					}
return con
}
//////////////////////funcion desbloquear
function desbloquear(){
	document.getElementById("genero").disabled = false
	document.getElementById("nombres").disabled = false
	document.getElementById("apellidos").disabled = false
	document.getElementById("area").disabled = false
	document.getElementById("telefono").disabled = false
	document.getElementById("celular").disabled = false
	document.getElementById("email").disabled = false
}
///////////vaciar
function vaciar(){
		$(":text").each(function(){	
		$($(this)).val('');
		document.form_nuevo_profesor.email.value = "";
	});
}
/////////////////////////////////crear_nuevo_profesor	
	$(".profesor").click(function(e){
		e.preventDefault();
			var con = verficar();
			var cedula = $("#cedula").val();
		if (con==7){
		$.post('./controler/buscar_profesor.php',{
				cedula:cedula
			}, function(a){
				alert(a);
				if (a==0) {
				alert('El registro ha sido guardado con exito');
				document.form_nuevo_profesor.submit();	
				}
				else{
					$("#div_cedula").addClass("has-error");
					$("#error_cedula").text('*Numero invalido');
					document.form_nuevo_profesor.cedula.value = "";
					alert('Ya existe un usuario asociado al numero de cedula '+cedula)
					$("#cedula").focus();
				}
				
			});	

		}
		else{
			alert('Debe completar todos los campos obligatorios')
		}
	});
///////////////////////modificar_profesor
$(".modificar").click(function(e){
	e.preventDefault();

	document.getElementById("actualizar").disabled = false
	document.getElementById("modificar").disabled = true
	document.getElementById("eliminar").disabled = true
	desbloquear();
	document.editar.nombres.focus();
});
////////////////////eliminar_profesor
$("#eliminar").click(function(e){
	e.preventDefault();
	var cedula = $("#cedula").val();
	var nombres = $("#nombres").val();
	var apellidos = $("#apellidos").val();
		if (confirm('¿Desea eliminar el profesor '+nombres+' '+apellidos+'?')){
		$.post('./controler/Editar_profesor.php',{
					Caso:'Eliminar',
					cedula:cedula
					
				}, function(a){
					alert('Los Datos han sido eliminados con exito');
					location.href="./buscar_profesor.php?";
				});
		}
	else{
	}

});
//////////////////////////modificar_profesor

$("#actualizar").click(function(e){
	e.preventDefault();
	var con = verficar();
		var cedula = $("#cedula").val();
		var nombres = $("#nombres").val();
		var apellidos = $("#apellidos").val();
		var genero = $("#genero").val();
		var area = $("#area").val();
		var telefono = $("#telefono").val();
		var celular = $("#celular").val();
		var email = $("#email").val();
if (con==7) {
	if (confirm('¿Desea Actualizar los Datos del profesor '+nombres+' '+apellidos+'?')){
	$.post('./controler/Editar_profesor.php',{
				Caso:'Modificar',
				cedula:cedula,
				nombres:nombres,
				apellidos:apellidos,
				genero:genero,
				area:area,
				telefono:telefono,
				celular:celular,
				email:email
				
			}, function(a){
				alert('Los Datos han sido actualizados con exito');
				location.href="./buscar_profesor.php?";
			});
	}

}
else{
		alert('Debe completar todos los campos obligatorios')
		}
});
//////////////////////////nuevo_profesor
	$(".nuevo").click(function(e){
	e.preventDefault();
	desbloquear();
	document.getElementById("guardar").disabled = false
	document.getElementById("nuevo").disabled = true
	document.getElementById("cedula").disabled = false
	document.getElementById("imagen").disabled = false
	vaciar();
	//document.form_nuevo_profesor.cedula.focus();
	$("#cedula").focus();
	});
////////////////////////////////////////

////cargar tabla materias

function cargar_tabla_profesores(text_buscar){
	$.post('./controler/con_profesor.php',{
				text_buscar:text_buscar,
				caso:'cargar_tabla'

			},function(a){
				//alert(a);
			var json = eval(a);
						/////si el vector viene con informacion
						var tds=$("#tabla_profesores tr:first td").length;
						var trs=$("#tabla_profesores tr").length;
						$('#tabla_profesores tr:not(:first)').remove();
						var nuevaFila="<tr>";
	            		//////si la carga academica es indfinida no mando a imprimir
	            if ((json) != "undefined"){

					for(i=0; i<json.length; i++){
						nuevaFila="<tr>";
					 	nuevaFila+="<td><a href="+"'./detalles_profesor.php?id="+(json[i].id)+"'>"+(json[i].id)+"</a></td> <td>"+(json[i].nombres)+"</td> <td>"+(json[i].apellidos)+"</td> <td>"+(json[i].sexo)+"</td> <td>"+(json[i].area)+"</td> <td>"+(json[i].telefono)+"</td> <td>"+(json[i].celular)+"</td> <td>"+(json[i].email)+"</td>";
						nuevaFila+="</tr>";
	           		 	$("#tabla_profesores").append(nuevaFila);
	           		 	nuevaFila=" ";
	           		 }

	           		 $("#asignaturas_vacias").addClass("hidden");

	           	}else{
	           		/////si el vector no se lleno por que se se econtro coicidencia en la base de datos
						$('#tabla_profesores tr:not(:first)').remove();
						$("#alert_profe_vacio").removeClass("hidden");
	           	}
	           		
			});
}

//////si la tabla existe las lleno con datos
if ($("#tabla_profesores").length) {
	cargar_tabla_profesores($("#text_buscar").val());
		}else{
		//alert('no hay tabla !!!!');
	}
/////////////boton buscar
$("#btn_buscar").click(function(e){
	e.preventDefault();
	cargar_tabla_profesores($("#text_buscar").val());
});
//////////buscar en la caja de texto

$("#text_buscar").keyup(function(e){
	if(e.keyCode==13){
	cargar_tabla_profesores($("#text_buscar").val());
	}
});
//////
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
///////cargar_datos detalles profesor
if(typeof(getUrlVars()['id']) != "undefined"){ 
	$.post('./controler/con_profesor.php',{
		id:getUrlVars()['id'],
		caso:'buscar'
		},function(a){
			//alert(a);
			var json = eval(a);
		document.getElementById("cedula").value=(json[0].id);
			document.getElementById("nombres").value=(json[0].nombres);
				document.getElementById("apellidos").value=(json[0].apellidos);
					document.getElementById("telefono").value=(json[0].telefono);
						document.getElementById("celular").value=(json[0].celular);
							document.getElementById("email").value=(json[0].email);
								document.getElementById("area").value=(json[0].area);
		////verifico si el usuario tiene una imagen guardada sino cargo una imagen por defecto dependiendo su sexo
		if ((json[0].imagen) != '') {
		$('#imagen').prepend('<img class="img img-responsive img-rounded" id="theImg" src="./imagenes/'+(json[0].imagen)+'" title=""/>');
			}else{
				if (json[0].sexo=='Masculino') {
					$('#imagen').prepend('<img class="img img-responsive img-rounded" id="theImg" src="./img/user_m.jpg" title=""/>');
				}
					if (json[0].sexo=='Femenino') {
					$('#imagen').prepend('<img class="img img-responsive img-rounded" id="theImg" src="./img/user_f.jpg" title=""/>');
				}
		}						

		//////selecciono el sexo en el combo box////
		$('#genero > option[value="'+(json[0].sexo)+'"]').attr('selected', 'selected');
		$('#btn_modificar_profesor').prepend('<a class="btn btn-info btn-block" href="./editar_profesor.php? id='+(json[0].id)+'" title="Editar Profesor"role="button>">Modificar</a>');
		

	});
}

////////////
}
//$.post('',{},function(a){});
$(document).on('ready',inicio);