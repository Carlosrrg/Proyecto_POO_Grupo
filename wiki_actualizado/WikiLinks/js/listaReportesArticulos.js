$(document).ready(function(){	
	cargarTarjetas = function(){
		$.ajax({
			url:"../ajax/listaRepostesArticulosModerador.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#div-lista-aplicaciones").html(resultado);
			},
			error:function(){

			}
		});
	}
	cargarTarjetas();

});


function cancelarcuenta(codigousuario){

				var parametros="codigo="+codigousuario;
			$.ajax({
			url:"../ajax/listaRepostesArticulosModerador.php?accion=2",
			method: "POST",
			success:function(resultado){
				
			},
			error:function(){

			}
		});

}