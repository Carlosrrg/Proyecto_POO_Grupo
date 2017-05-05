$(document).ready(function(){
	$("#btn-login").click(function(){
			var parametros = "txt-nombre=" +$("#txt-nombre").val() + 
						"&txt-contrasena="+$("#txt-contrasena").val();
			alert(parametros);
			$.ajax({
				url:"../ajax/acciones_login.php?accion=1",
				method: "POST",
				data: parametros,
				dataType: 'html',
				success:function(respuesta){
					//alert("ahora estoy aqui");
					//alert(respuesta);
					
					
					$("#resultado").html(respuesta.resultado + "Tipo Usuario: " + respuesta.codigo_tipo_usuario);
					if(respuesta.codigo_tipo_usuario =='1')
						window.location="../perfilUsuarioModerador.php";
					else if(respuesta.codigo_tipo_usuario =='2')
						window.location="../perfilUsuarioNormal.php";
					alert("que loco");
				},

				error:function(e){
					alert(e.error);
					//alert(respuesta);

				}
		});
	});	
});

