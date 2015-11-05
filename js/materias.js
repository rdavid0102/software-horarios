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
			$.post('./controler/cargar_materias.php',{
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
////

}
$(document).on('ready',inicio);
////////////////






