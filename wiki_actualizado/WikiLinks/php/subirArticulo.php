<!DOCTYPE html>
<html>
<head>
	<title>Wikilinks</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="../img/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="../css/style-marco.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
<?php
	
	if(isset($_POST["nombre-articulo"])){
        $recibo_nombre=$_POST['nombre-articulo'] ;
		echo '<strong>' .$recibo_nombre.'</strong>';
        }
?>	
<?php
	
	if(isset($_POST["area-editor"])){
        $recibo_area=$_POST['area-editor'] ;
		echo $recibo_area;
        }
?>



</head>
	<body>
		<header>
	

		</header>
		<br>
		<div class="div1 container-fluid ">
			<div class="main row">

				<div class="col-xs-12 co-sm-2 col-md-2 col-lg-2 hidden-xs hidden-sm">
					<img src="../img/wiki.png" width="135" alt="Logo de Wikilinks">
					<br><br>
					<a href="../index.html"><img src="../img/Wikilinkslanding.png" width="145"></a>
					<br><br>
					
					<!--Menu lateral izquierdo-->
					
					<div class="">            
					  <table class="table table-hover">
						<tr><td>
							<ul class="list-group2">
								<li><a href="noticias.php">Portada</a></li>
								<li><a href="reportarArticulo.php">Reportar Articulo</a></li>
								<li><a href="#">Moderador</a></li>
								<li><a href="#">Ayuda</a></li>
								<li><a href="../donaciones.html">Donaciones</a></li>
								</ul>

						</td></tr>

						<tr><td>
							<h6 class="list-left">En otros proyectos</h6>
							<ul class="list-group1">
								<li><a>Wikimedia Commons</a></li>
							</ul>
						</td></tr>
						<tr><td>
							<h6 class="list-left">Herramientas</h6>
							<ul class="list-group1">
								<li><a href="">Lo que enlaza aqui</a></li>
								<li><a href="">Cambios en enlazadas</a></li>
								<li><a href="">Subir archivo</a></li>
								<li><a href="">Paginas especiales</a></li>
								<li><a href="">Enlace permanete</a></li>
								<li><a>Informacion de la pagina</a></li>
								<li><a>Elemento de wikidata</a></li>
								<li><a>Citar esta pagina</a></li>
							</ul>
						</td></tr>
					    </tbody>
					  </table>
					</div>
					<br>
					<br>	
				</div>
				
				<div class=" col-xs-12 col-sm-12 col-md-10 col-lg-10 ">
					<div class="row">
						<div class="visible-xs visible-sm" >
							<!--Menu para dispositivos moviles-->
							<nav class="navbar navbar-default" role="navigation">
							  <!-- El logotipo y el icono que despliega el menú se agrupan
							       para mostrarlos mejor en los dispositivos móviles -->
							  <div class="navbar-header">
							   	
							    <button type="button" class="navbar-toggle" data-toggle="collapse"
							            data-target=".navbar-ex1-collapse">
							      
							      <span class="sr-only">Desplegar navegación</span>
							      <span class="icon-bar"></span>
							      <span class="icon-bar"></span>
							      <span class="icon-bar"></span>
							    </button>
							  	   
							    <a class="navbar-brand" href="../index.html">Wikilinks</a>
							  </div>

							 
							  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
							       otro elemento que se pueda ocultar al minimizar la barra -->
							  <div class="collapse navbar-collapse navbar-ex1-collapse">
							    <ul class="nav navbar-nav">
							      <li><a href="noticias.php">Portada</a></li>
							      <li><a href="reportarArticulo.php">Reportar Articulo</a></li>
							    </ul>
							    <ul class="nav navbar-nav">
							      <li class=><a href="login.php">Acceder</a></li>
							      <li><a href="registroUsuario.php">Crear una cuenta</a></li>
							      
							    </ul>
							 
							  </div>
							</nav>
						</div>


						<div class="col-xs-12 col-lg-12 hidden-sm hidden-xs">
							<div  align="right">
								<!--Accesos para ventana media, grande-->
								<h6>
								<span class="glyphicon glyphicon-user"></span>
									<a href="login.php">Acceder</a>&nbsp;&nbsp;
									<a href="registroUsuario.php">Crear una cuenta</a>&nbsp;&nbsp;
									

								</h6>
							</div>
						</div>
						
						<div class="col-sm-4 col-md-5 hidden-xs hidden-sm">
							<ul class="nav nav-tabs">
							    <li id="li-articulo" name="li-articulo" class="active" >
							    	<a href="#editor" data-toggle="tab" onClick="">	Página especial
							    	</a>
							    </li>  
							</ul>
						</div>
						<div class="col-sm-4 col-md-4 col- hidden-xs hidden-sm">
							<ul class="nav nav-tabs">
							    
							    <li name="li-editar" id="li-editar" class="active" >
							    	<a onClick="" href="" data-toggle="tab">Editar
							    	</a>
							    </li>
							    
			
							</ul>
						</div>
						
						
						<!--Barra de busqueda-->
						<div class="col-xs-11 col-sm-11 col-md-3">
							<div class="input-group">
						      <input type="search" placeholder="Buscar en Wikilinks" class="form-control">
						      <span class="input-group-btn">
						        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search">
									</span>
								</button>
						      </span>
						    </div>
						</div>

						<!--Insertar pagina externa dentro de esta pagina-->				
						<div class="tab-content" id="">
							<!--Ventana interna para editar articulo-->
							
							<div class="tab-pane fade col-xs-12 col-lg-12 in active well" id="editor">
								
								<form method="POST">	
									<h1>Crea un nuevo artículo</h1>
									<table class="table">
										<tr>
									        <td>
									        	<h5 class="text-right" ><strong>Nombre del articulo:</strong></h5>
									        </td>
									        <td>
									        	<input type="text" class="form-control" id="nombre-articulo" name="nombre-articulo">
									        </td>
									        <td>
									        	<input type="submit" class="btn btn-default" value="Guardar edición">
									        </td>
									    </tr>
									</table>
									
  									
									
									<textarea id="area-editor" name="area-editor">
										<?php
											
												echo '<h3>Comienza a editar tu artículo con las herramientas que Wikilinks te ofrece.</h3>' ;
										?>
									</textarea>
									
								</form>

							</div>
						</div>

					</div>
				</div>
				



			</div>
			<hr class="divi">

			<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<p style="text-align: center;"><strong>©Copyrigth 2017 - Proyecto de POO</strong></p>
    			</div>
    		</div>
		</div>

		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>

		<script type="text/javascript" src="../js/manejodiv.js"></script>
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/descargarpdf.js"></script>
		<script type="text/javascript" src="../js/jspdf.min.js"></script>

		<script src="../tinymce/js/tinymce/tinymce.min.js"></script>
		<script src="../tinymce/js/tinymce/langs/es.js"></script>
		<script>
			tinymce.init({
			  selector: 'textarea',
			  height: 400,
			  theme: 'modern',
			  plugins: [
			    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			    'searchreplace wordcount visualblocks visualchars code fullscreen',
			    'insertdatetime media nonbreaking save table contextmenu directionality',
			    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
			  ],
			  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
			  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
			  image_advtab: true,
			  templates: [
			    { title: 'Test template 1', content: 'Test 1' },
			    { title: 'Test template 2', content: 'Test 2' }
			  ],
			  content_css: [
			    '../tinymce/js/tinymce/skins/lightgray/css.css',
			    '../tinymce/js/tinymce/skins/lightgray/codepen.min.css'
			  ]
			 });			
		</script>
	</body>
</html>
