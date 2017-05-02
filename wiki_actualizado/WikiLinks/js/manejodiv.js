$(document).ready(function()
{

        $.post("../Articulos/Unah.html", function(htmlexterno){
   			$("#articulo").html(htmlexterno);
        $('#noarticulo').hide();
    	});

});


/* Codigo para el funcionamiento del editor
var editor;

function $(id){
    return document.getElementById(id);
}
function formato(f){
    editor.execCommand(f, false, null);
}
function rev(t)    {
    return t.split("<").join("&lt;").split(">").join("&gt;").split("\"").join("&quot;");
}
function insertarEnlace(){
    var u;
    if(!(u=prompt('Ingresar URL','http://')))return;
    editor.execCommand("CreateLink",false,u);
}
function insertarImagen(){
    var u;
    if(!(u=prompt('Ingresar URL','http://')))return;
    editor.body.focus();
    editor.execCommand("InsertImage",false,u);
}
function color(c){
    editor.execCommand("forecolor",false,c);
}
function inHTML(){
    var u,u2;
    if(!(u=prompt('ingresar html','')))return;
        try{
            editor.execCommand("inserthtml",false,u);
        }catch(e){
            try{
                editor.body.focus();
                u2=editor.selection.createRange();
                u2.pasteHTML(u);
            }catch(E){
                alert('nop');
            }
        }
}
function htmlOEditor(e){
    e=e || window.event;
    ob=e.target || e.srcElement
    $('edit').style.display=(ob.value=='Ver html')?'none':'block';
    $('ht').style.display=(ob.value!='Ver html')?'none':'block';
    $('ht').innerHTML=rev(editor.body.innerHTML);
    ob.value=(ob.value=='Ver html')?'Ver editor':'Ver html';
}
window.onload=function(){
    editor=$('edit').contentDocument || $('edit').contentWindow.document;
    editor.designMode='on';
}

*/