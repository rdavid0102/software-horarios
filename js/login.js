var inicio=function () {


	$(".ver_login").click(function(e){
		e.preventDefault();
		var usuario=$(this).parentsUntil('usuario').find('.nombre').val();
		var password=$(this).parentsUntil('clave').find('.password').val();
					
				 var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
			 
			    //Se utiliza la funcion test() nativa de JavaScript
			   
			    if (regex.test(usuario.trim())) {
			    	if(password!=''){

			       	$.post('../controler/verificar_login.php',{
						usuario:usuario,
						password:password
					}, function(a){
			
							if (a==1) {
								location.href="../horarios.php?";
							}
							else{

								$("#error_email").addClass("hidden");
								$("#error_login").removeClass("hidden");
								$("#div_login").removeClass("has-error");
								$("#div_email").removeClass("has-error");
								$("#password").focus();
							}
					
						});
					}else{
						$("#error_email").addClass("hidden");
						$("#error_login").removeClass("hidden");
						alert('Digite su contraseña');
						$("#password").focus();


					}

			    }
			    else {
			    	$("#error_login").addClass("hidden");
					$('#usuario').popover('show')
			    	$("#error_email").removeClass("hidden");
			    	$("#div_email").addClass("has-error");
			    	$("#usuario").focus();
			    }

	

	});

///////popover

$("#usuario").click(function(e){
e.preventDefault();
$('#usuario').popover('destroy');
});
$("#email").click(function(e){
e.preventDefault();
$('#email').popover('destroy');
});

///////////


///hay un error $('#popover_user').tooltip('hidden');
//////////////////////////////


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
	

																				if ($('#password1').val() == $('#password2').val()) {
																						if ($('#password1').val() =='' & $('#password2').val()==''){
																							$("#div_password").addClass("has-error");
																							$("#error_password").text('*Las Contraseñas No Coiciden o los Campos estan vacios');
																						}
																							else{
																									if (($("#password1").val().length < 5)) {
																									$("#div_password").addClass("has-error");
																									$("#error_password").text('*La contraseña es muy corta');
																									
																									}
																									else{
																										var password = $("#password1").val();
																										$("#error_password").empty();
																					    				$("#div_password").removeClass("has-error");
																					    				var con=con+1;
																									}
																							}
																					}
																				else{
																					$("#div_password").addClass("has-error");
																					$("#error_password").text('*Las Contraseñas No Coiciden o los Campos estan vacios');

																				}
																					

//alert(con);
return con
}


//////////////////////////
//////nuevo_usuario
$(".enviar_datos").click(function(e){
e.preventDefault();
var con=verficar();
var email=$('#email').val();
if(con==7){
		$.post('./controler/verificar_email.php',{
				email:email
			}, function(a){
			
				if (a==0) {
				alert('El usuario ha sido creado con exito');
				document.form_enviar_datos.submit();	
				}
				else{
					$("#div_email").addClass("has-error");
					$("#error_email").text('*Email duplicado');
					document.form_enviar_datos.email.value = "";
					alert('Ya existe un usuario asociado al email '+email)
					document.form_enviar_datos.email.focus();
				}
				
			});	
}

});
///////////new_email
$(".new_email").click(function(e){
e.preventDefault();
var email=$("#email").val();

var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
	if (regex.test(email.trim())) {
			$.post('../controler/verificar_email.php',{
				email:email
			}, function(a){
				if (a!=0) {
					$("#alert_email").addClass("hidden");
					$("#ok_email").removeClass("hidden");
					$("#group_email").addClass("hidden");
					$("#group_email2").addClass("hidden");
					$("#div_email").removeClass("has-error");
					$("#start_session").removeClass("hidden");
					$.post('../admin/recupera_login.php',{
						email:email
					},function(a){
						
					});
				}
				else{
					$("#ok_email").addClass("hidden");
					$("#div_email").addClass("has-error");
					document.form_reset_email.email.value = "";
					document.form_reset_email.email.focus();
					$("#alert_email").removeClass("hidden");
					//document.form_enviar_datos.email.focus();
				}
				
			});	

	}
	else{
		$('#email').popover('show');
	}



});


//////////////////menu_buscarprofesor
$(".menu_buscarprofesor").click(function(e){
$('#myModal').modal('show');
});
////////
function buscar_profesor()
{
		var apellidos=$('#text_buscar_profesor').val();
		$.post('./controler/cargar_lista_profesor.php',{
			apellidos:apellidos
				},function(a){
					//alert(a);

					var json = eval(a);
				/////si el vector viene con informacion
					if ((json)!="undefined"){
						var tds=$("#tabla_profesores tr:first td").length;
						var trs=$("#tabla_profesores tr").length;
						$('#tabla_profesores tr:not(:first)').remove();
						
		            	var nuevaFila="<tr>";
						for(i=0; i<json.length; i++){
							nuevaFila="<tr>";
						 	nuevaFila+="<td><a href="+"'./carga_profesor.php?id="+(json[i].id)+"'>"+(json[i].id)+"</a></td> <td>"+(json[i].nombres)+"</td> <td>"+(json[i].apellidos)+"</td> <td>"+(json[i].area)+"</td>";
							nuevaFila+="</tr>";
		           		 	$("#tabla_profesores").append(nuevaFila);
		           		 	nuevaFila=" ";
						}
						$("#alert_profe_vacio").addClass("hidden");
					}else{
						/////si el vector no se lleno por que se se econtro coicidencia en la base de datos
						$('#tabla_profesores tr:not(:first)').remove();
						$("#alert_profe_vacio").removeClass("hidden");
					}
					
		
			});
}

//////
///////////////////buscar_profesor_modal
$(".buscar_profesor_modal").click(function(e){
buscar_profesor();
});
$("#text_buscar_profesor").keyup(function(e){
	if(e.keyCode==13){
		buscar_profesor();
	}
});

////////////////////////////////////////cargar datos del profesor en carga
 // Leer los datos GET de nuestra pagina y devolver un array asociativo (Nombre de la variable GET => Valor de la variable).
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

/////////////////iniciar_la busqueda en el menu_busqueda_profesor
buscar_profesor();
//////////////////////




//////////////////

}
$(document).on('ready',inicio);
///////////cargar_materias
$(function() {
				
				 $.post('./controler/cargar_materias.php',{
				
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

