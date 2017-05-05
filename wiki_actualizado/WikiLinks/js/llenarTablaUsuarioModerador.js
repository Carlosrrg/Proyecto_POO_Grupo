$(document).ready(function(){
	$.ajax({
		url:"../ajax/mostrarListaUusarioModerador.php?accion=1",
		method:"POST",
		success:function(resultado){
			$("#mostrar-tabla").html(resultado);
		}
	});
});

function codigoUsuario(codigo){
	//alert("codigo: "+codigo);
	var parametro="codigo="+codigo;
	$.ajax({
		url:"../ajax/mostrarListaUusarioModerador.php?accion=2",
		data:parametro,
		method:"POST",
		success:function(resultado){
			$("#mostraropcion2").html(resultado);
		}
	});
}
