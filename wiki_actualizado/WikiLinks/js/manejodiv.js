$(document).ready(function()
{

        $.post("Articulos/Unah.html", function(htmlexterno){
   			$("#articulo").html(htmlexterno);
        $('#noarticulo').hide();
    	});

  





});

function articulo(){

	$.post("Articulos/Unah.html", function(htmlexterno){
   		$("#articulo").html(htmlexterno);
      $('#noarticulo').hide();
      $('#articulo').show();
    });
	
}

function discusion(){

	$.post("Articulos/Discusion.html", function(htmlexterno){
   		$("#noarticulo").html(htmlexterno);
      $('#noarticulo').show();
      $('#articulo').hide();
    });
	
}
function leer(){

	$.post("Articulos/Unah.html", function(htmlexterno){
   		$("#noarticulo").html(htmlexterno);
      $('#noarticulo').show();
      $('#articulo').hide();
    });
	
}
function editar(){

	$.post("EditorTexto/Editor.html", function(htmlexterno){
   		$("#noarticulo").html(htmlexterno);
      $('#noarticulo').show();
      $('#articulo').hide();

    });
	
}

function historial(){

	$.post("Articulos/Historial.html", function(htmlexterno){
   		$("#noarticulo").html(htmlexterno);
      $('#noarticulo').show();
      $('#articulo').hide();
    });
	
}



