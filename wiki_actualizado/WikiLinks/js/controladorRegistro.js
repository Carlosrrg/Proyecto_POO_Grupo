	//procesa el formulario de registro de usuario
$(document).ready(function(){

	$("#registrarse").click(function(){
		var parametros=
				"txt-nombre="+$("#txt-nombre").val()+"&"+
				"txt-correo="+$("#correo").val()+"&"+
				"txt-contrasena"+$("#contrasena").val()+"&"+
				"txt-confirmar-contrasena="+$("#confirmar-contrasena").val();
	           // alert("parametros a enviar " + parametros);
				$.ajax({
						url:"../ajax/acciones_login.php?accion=2",
						data:parametros,
						method:"POST",
						dataType: "json",
							success:function(respuesta){
								if (respuesta["codigo"]==1) {
										alert(respuesta["mensaje"]);
								}else{
									alert(respuesta["mensaje"]);
								}
								$("#ingresar").button("reset");

							}
						
				});

	});
	

});
