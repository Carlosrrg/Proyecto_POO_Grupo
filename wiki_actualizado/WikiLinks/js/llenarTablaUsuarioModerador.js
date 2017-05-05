$(document).ready(function(){
	$.ajax({
		url:"ajax/mostrarListaUusarioModerador.php?accion=1",
		method:"POST",
		success:function(resultado){
			$("#mostrar-tabla").html(resultado);
		}
	});
});

function codigoUsuario(codigo){
	var codigo2=3;
	alert("codigo: ")+codigo;
	$("#txt-prueba").val(codigo2);
}