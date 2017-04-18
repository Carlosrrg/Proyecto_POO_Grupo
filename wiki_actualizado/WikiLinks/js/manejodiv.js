$(document).ready(function()
{

        $.post("Articulos/Unah.html", function(htmlexterno){
   			$("#articulo").html(htmlexterno);
    	});

    	$('#noarticulo').hide();	

});



function articulo(){

	$.post("Articulos/Unah.html", function(htmlexterno){
   		$("#articulo").html(htmlexterno);
    });
	
	$('#noarticulo').hide();
	$('#articulo').show();



}


function noarticulo(){
	$('#noarticulo').show();
	$('#articulo').hide();

}