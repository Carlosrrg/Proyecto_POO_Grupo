$(document).ready(function()
{
		
    	$("#tomarfoto").hide();
  	    $("#guardar").hide();
  		$("#imagen").hide();
  		$("#canvas").hide();
		$("#video").hide();
		
		


});

 $(function(){

 		
        $("input[name='file']").on("change", function(){
            var formData = new FormData($("#formulario")[0]);
            var ruta = "../ajax/accionesUsuarioNormal.php?accion=1";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(e)
                {
                    
                      	 
                }
            });
             location.reload(true);
        });
       
     });




function foto(){
$("#tomarfoto").show();
$("#guardar").hide();
$("#camara").hide();
$("#subirFoto").hide();
$("#imagenPerfil").hide();
$("#formulario").hide();
$("#video").show();



	var video= document.querySelector('#video'),
	canvas = document.querySelector('#canvas'),
	btn= document.querySelector('#tomarfoto'),
	img= document.querySelector('#imagen');


	navigator.getUserMedia=(
		navigator.getUserMedia ||   //standar
		navigator.webkitGetUserMedia ||//chrome
		navigator.mozGetUserMedia ||///mozilla
		navigator.msGetUserMedia //explorer


		);


	//validando que encontro  el user media
	if(navigator.getUserMedia){

		navigator.getUserMedia({video:true},function(stream){
			video.src= window.URL.createObjectURL(stream); //lee la camara
			video.height=240;
			video.width=320;
			video.play(); //reproduce el video
		
		
			
		},function(e){console.log(e);}) //imprimer algun tipo de error



	}else {
		alert('Tu navegador no soporte esta funcion');
	}

	video.addEventListener('loadedmetadata',function(){ canvas.width=video.videoWidth; canvas.height=video.videoHeight;},false);
	btn.addEventListener('click',function(){
		canvas.getContext('2d').drawImage(video,0,0);
		var imgData= canvas.toDataURL('image/png');
		img.setAttribute('src',imgData);




	});
	

}




function ocultar(){

$("#video").hide();
$("#imagen").show();
$("#guardar").show();


}
function guardar(codigoUsuario){

	
      
            var parametro = "base64="+document.getElementById("imagen").src+"&"+
            					"codigo_Usuario="+codigoUsuario;
   
            $.ajax({
                    url: '../ajax/accionesUsuarioNormal.php?accion=2',  
                    method: "POST",
                    data:parametro,
                        
              
                    success: function(rs)
                    {
                     $("#tomarfoto").hide();
  					$("#guardar").hide();
  					$("#imagen").hide();

  				
                         location.reload(true);                
                    }

                });  

   			
         

}
function BorrarCuenta(codigoUsuario){
				var parametro = "codigo_Usuario="+codigoUsuario;
   
            $.ajax({
                    url: '../ajax/accionesUsuarioNormal.php?accion=3',  
                    method: "POST",
                    data:parametro,
                        
              
                    success: function(rs)
                    {
                                   
                    }

                });  


}

function habilitar(){

 	$("#txt-nombre-moderador").prop('disabled', false);
 	$("#txt-correo-moderador").prop('disabled',false);
	$("#txt-date-moderador").prop('disabled',false);
	$("#txt-usuario-moderador").prop('disabled',false);
	$("#txt-contrasena-moderador").prop('disabled',false);
	$("#txt-especialidad-moderador").prop('disabled',false);
	$("#slc-categoria-moderador").prop('disabled',false);
	$("#btn-aceptar").prop('disabled',false);
	$("#btn-no-aceptar").prop('disabled',false);



}
function deshabilitar(){

$("#txt-nombre-moderador").prop('disabled', true);
 	$("#txt-correo-moderador").prop('disabled',true);
	$("#txt-date-moderador").prop('disabled',true);
	$("#txt-usuario-moderador").prop('disabled',true);
	$("#txt-contrasena-moderador").prop('disabled',true);
	$("#txt-especialidad-moderador").prop('disabled',true);
	$("#slc-categoria-moderador").prop('disabled',true);
	
	$("#btn-aceptar").prop('disabled',true);
	$("#btn-no-aceptar").prop('disabled',true);

}

function editar(codigoUsuario){



	
	var parametros = "txt-nombre-moderador=" + $("#txt-nombre-moderador").val() + "&" + 
			"txt-correo-moderador="+$("#txt-correo-moderador").val()+ "&" +
			"txt-date-moderador="+$("#txt-date-moderador").val() + "&" +
			"txt-usuario-moderador="+$("#txt-usuario-moderador").val() + "&" +
			"txt-contrasena-moderador="+$("#txt-contrasena-moderador").val() + "&" +
			"txt-especialidad-moderador="+$("#txt-especialidad-moderador").val() + "&" +
			"slc-categoria-moderador="+$("#slc-categoria-moderador").val() + "&" +
			"codigo_Usuario="+codigoUsuario;


			$.ajax({
		url:"../ajax/accionesUsuarioNormal.php?accion=4",
		method: "POST",
		data:parametros,
		
		success:function(resultado){
			
		
		},
		error:function(e){
			alert(e);
		}
	});








}