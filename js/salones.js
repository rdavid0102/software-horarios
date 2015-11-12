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
//////////////////cargar tabla salones
function cargar_tabla_salones(){
	if ($("#tabla_salones").length){
		$.post('./controler/con_salones.php',{
						caso:'cargar'
					},function(a){
						//alert(a);
					var json = eval(a);

								var tds=$("#tabla_salones tr:first td").length;
								var trs=$("#tabla_salones tr").length;
								var total=0;
			            		var nuevaFila="<tr>";
			
			            		//////si la carga academica es indfinida no mando a imprimir
			            if (typeof(json) != "undefined"){

							for(i=0; i<json.length; i++){
								
								nuevaFila="<tr>";
							 	nuevaFila+="<td><a href="+"'./editar_salones.php?id_salon="+(json[i].id_salon)+"'>"+(json[i].num_salon)+"</a></td> <td>"+(json[i].nombres)+" "+(json[i].apellidos)+"</td> <td>"+(json[i].nom_materia)+"</td>";
								nuevaFila+="</tr>";
			           		 	$("#tabla_salones").append(nuevaFila);
			           		 	nuevaFila=" ";
			           		 }
			           	//	 $("#carga_vacia").addClass("hidden");

			           	}
			           		//carga_vacia
					});
	}else{
		//alert("no hay una tabla");
	}

	
}


cargar_tabla_salones();
////funcion cargar detalles salon
function cargar_detalles_salon(){
	if(typeof(getUrlVars()['id_salon']) != "undefined"){ 
		var id_salon = getUrlVars()['id_salon'];

		$.post('./controler/con_salones.php',{
			caso:'detalles',
			id_salon:id_salon
			},function(a){
				//alert(a);
			var json = eval(a);
			
			document.getElementById("id_salon").value=(json[0].id_salon);
			document.getElementById("num_salon").value=(json[0].num_salon);
			document.getElementById("profesor").value=(json[0].nombres+' '+json[0].apellidos);
			document.getElementById("asignatura").value=(json[0].nom_materia);
		});

	}

}
////////////fin funcion cargar detalles salonç
cargar_detalles_salon();

///////////////editar_salon
$("#editar_salon").click(function(e){
	e.preventDefault();
	document.getElementById("editar_salon").disabled= true
		document.getElementById("eliminar_salon").disabled= true
			document.getElementById("actualizar_salon").disabled= false
				document.getElementById("num_salon").disabled= false
					document.getElementById("num_salon").focus();

});

//////////
///////////////editar_salon
$("#actualizar_salon").click(function(e){
	e.preventDefault();
	$.post('./controler/con_salones.php',{
		id_salon:$("#id_salon").val(),
		num_salon:$("#num_salon").val(),
		caso:'actualizar'
		},function(a){
			//alert(a);
			if(a==1){
				$("#error_num").removeClass("has-error");
				alert('El Salon ha sido actualizado con exito');
			}
				else{
					alert('Waning! se ha producido un error al parecer el numero del salon ya existe');
					document.getElementById("num_salon").focus();
					$("#error_num").addClass("has-error");
				}
	});

});
//////////
$("#eliminar_salon").click(function(e){
	e.preventDefault();
});
//////////
}

$(document).on('ready',inicio);
/////////////////////iniciar//////////////////////$.post('',{},function(a){});

