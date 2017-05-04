$(document).ready(function(){	
	cargarTablas = function(){
		$.ajax({
			url:"../ajax/funcionesAdministrador.php?accion=1",
			method: "POST",
			success:function(resultado){
				$("#Notificaciones-moderadores").html(resultado);
			},
			error:function(){

			}
		});
	}




	cargarTablas();
});

function borrarUsuario(codigoUsuario){

var parametro = "codigo_Usuario="+codigoUsuario;
   
            $.ajax({
                    url: '../ajax/funcionesAdministrador.php?accion=2',  
                    method: "POST",
                    data:parametro,
                        
              
                    success: function(rs)
                    {
                                   
                    }

                }); 






}

function borrarArticulo(codigoArticulo){


var parametro = "codigo_Articulo="+codigoArticulo;
   
            $.ajax({
                    url: '../ajax/funcionesAdministrador.php?accion=3',  
                    method: "POST",
                    data:parametro,
                        
              
                    success: function(rs)
                    {
                                   
                    }

                }); 










}