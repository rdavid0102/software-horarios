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
		document.editar.email.value = "";
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
				if (a==0) {
				alert('El registro ha sido guardado con exito');
				document.editar.submit();	
				}
				else{
					$("#div_cedula").addClass("has-error");
					$("#error_cedula").text('*Numero invalido');
					document.editar.cedula.value = "";
					alert('Ya existe un usuario asociado al numero de cedula '+cedula)
					document.editar.cedula.focus();
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
	document.editar.cedula.focus();
	});
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
	$.post('./controler/nuevo_horario.php',{
				nom_horario:nom_horario
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

//////////////////////////////////////////editar_nom_horario
$("#editar_nom_horario").click(function(e){
e.preventDefault();
var nom_horario=$("#nom_horario").val();
var nom_new=$("#nombre").val();

	$.post('./controler/Editar_horario.php',{
		nom_horario:nom_horario,
		nom_new:nom_new
	}, function(a){
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
//////////////////////////////////////////editar_nom_horario
$("#eliminar_horario").click(function(e){
e.preventDefault();
var nom_horario=$("#nom_horario").val();
if (confirm('¿Esta seguro Que desea elimimar el horario '+nom_horario+'? WARNING! Recuerde que todos los datos asociados a este horario serian eliminados de la base de datos.')){
	$.post('./controler/eliminar_horario.php',{
		nom_horario:nom_horario
		}, function(a){
			alert('El horario ha sido eliminado con exito')
			location.href="./editar_horario.php";
		});
	}
});

////////////////
$(".menu").click(function(e){
   var nom_horario=$("#nom_horario").val();
   document.form_nom_horario.nombre.value = nom_horario;
 });
////////////////
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
			$.post('./controler/nuevo_curso.php',{
						nom_curso:nom_curso,
						num_curso:num_curso
					}, function(a){

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
	var id_curso=$(this).attr('data-id');
	if(con==2){
		$.post('./controler/actualizar_curso.php',{
						id_curso:id_curso,
						nom_curso:nom_curso,
						num_curso:num_curso
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
		$.post('./controler/Eliminar_curso.php',{
			id_curso:id_curso
		}, function(a){
			alert('El Curso ha sido eliminado con exito')
			location.href="./nuevo_curso_home.php";

		});
}
	else{

	}
});
///////
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
				$.post('./controler/nuevo_materia.php',{
							nom_materia:nom_materia
							
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
	var nom_materia = $(".nom_materia").val();
	var id_materia=$(this).attr('data-id');

	if(con==1){
		$.post('./controler/actualizar_materia.php',{
						id_materia:id_materia,
						nom_materia:nom_materia	
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
var nom_materia = $(".nom_materia").val();
var id_materia=$(this).attr('data-id');
	if (confirm('¿Esta seguro de Eliminar la asignatura '+nom_materia+'? WARNING: Toda la informacion asociada a esta asignatura seria eliminada de la base de datos.')){
	$.post('./controler/Eliminar_materia.php',{
		id_materia:id_materia
	}, function(a){
		alert('La asignatura ha sido eliminada con exito')
		location.href="./nueva_materia.php";
	});
}
	else{
	}
});
//////////////////////////////salir
$(".cerrar_session").click(function(e){
e.preventDefault();
			location.href="./admin/cerrar_login.php";
});
////////////////////////////////////
$(".cambiar_password").click(function(e){
e.preventDefault();
var password= $("#password").val();
var password1= $("#password1").val();
var password2= $("#password2").val();
var email= $("#email").val();
if(password!=''){
	$.post('./controler/buscar_usuario.php',{
			email:email,
			password:password
		},function(a){
			$("#div_password").removeClass("has-error");
			$("#error_password").empty();
			if(a!=0){
				if ($('#password1').val() == $('#password2').val()) {
					if ($('#password1').val() =='' & $('#password2').val()==''){
						$("#div_password1").addClass("has-error");
						$("#error_password1").text('*Las Contraseñas No Coiciden o los Campos estan vacios');
						document.form_cambiar_password.password1.focus();
					}
					else{
						if (($("#password1").val().length < 5)) {
						$("#div_password1").addClass("has-error");
						$("#error_password1").text('*La contraseña es muy corta');
						}
						else{
							$("#error_password1").empty();
							$("#div_password1").removeClass("has-error");
							alert('la contraseña ha sido cambiado con exito');
							document.form_cambiar_password.submit();
							}
								}
									}
										else{
											$("#div_password1").addClass("has-error");
											$("#error_password1").text('*Las Contraseñas No Coiciden o los Campos estan vacios');
											document.form_cambiar_password.password1.focus();
											}				

			}else{
				$("#div_password").addClass("has-error");
				$("#error_password").text('*La contraseña es incorrecta');
				alert('Digite su contraseña actual!');
				document.form_cambiar_password.password.value='';
				document.form_cambiar_password.password.focus();
			}

	});
}
	else{
		alert('Escriba su contraseña.');
		$("#div_password").addClass("has-error");
		document.form_cambiar_password.password.focus();
	}
//location.href="./admin/cerrar_login.php";
});
//////

/////////////
}
//$.post('',{},function(a){});
$(document).on('ready',inicio);