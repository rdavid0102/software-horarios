var inicio=function () {
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