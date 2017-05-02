$(document).ready(function()
{

        $.post("../Articulos/Unah.html", function(htmlexterno){
   			$("#articulo").html(htmlexterno);
        $('#noarticulo').hide();
    	});

});

