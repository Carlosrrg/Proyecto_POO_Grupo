﻿<?php
	include_once("../class/class_conexion.php");
	include_once("../class/class-buscar.php");
	include_once("../class/class-articulo.php");
	include_once("../class/class-historial.php");
	include_once("../class/class-comentario.php");

/*

	$conexion = new Conexion();
	$conexion->establecerConexion();
	if (isset($_POST['text-buscador'])) {
		$buscador = $_POST['text-buscador'];
		$buscar = new Buscador($buscador);
		$fila = $buscar->buscar($conexion);
	}
*/

	




	
	$contenido='';

	if (isset($_POST['area-editor'])) {
 		$contenido = $_POST['area-editor'];
 	}
 	if (isset($_POST['areaeditor'])) {
 		$contenido = $_POST['areaeditor'];
 	}




?>


<!DOCTYPE html>
<html>
<head>
	<title>Wikilinks</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="../img/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="../css/style-marco.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
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
								<li><a href="listaReportesPorUsuarios.php">Moderadores</a></li>
								<li><a href="subirArticulo.php">Crear Articulo</a></li>
								<li><a href="#">Ayuda</a></li>
								<li><a href="donaciones.php">Donaciones</a></li>
								</ul>

						</td></tr>
						
						<tr><td>
							<h6 class="list-left">Imprimir/Exportar</h6>
							<ul class="list-group1">
								<li><a>Crear un libro</a></li>
								<li>
									<a href="../Articulos/Unah.html" target="_blank">Version para imprimir</a></li>
									<a href="javascript:getpdf();">Descargar como PDF</a>
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
				
				<div   class=" col-xs-12 col-sm-12 col-md-10 col-lg-10 ">
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
							  	   
							    <a class="navbar-brand" href="#">Wikilinks</a>
							  </div>

							 
							  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
							       otro elemento que se pueda ocultar al minimizar la barra -->
							  <div class="collapse navbar-collapse navbar-ex1-collapse">
							    <ul class="nav navbar-nav">
							      <li class=><a href="../noticias.html">Portada</a></li>
							      <li><a href="reportarArticulo.php">Reportar articulo</a></li>
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
							    	<a href="#articulo" data-toggle="tab" onClick="">	Artículo
							    	</a>
							    </li>
							    <li id="li-discusion" name="li-discusion" class="" >
							    	<a onClick="" href="#discusion" data-toggle="tab">Discusión
							    	</a>
							    </li>
							   
							</ul>
						</div>
						<div class="col-sm-4 col-md-4 col- hidden-xs hidden-sm">
							<ul class="nav nav-tabs">
							    <li id="li-articulo" name="li-articulo" class="active" >
							    	<a onClick="" href="#articulo" data-toggle="tab">Leer
							    	</a>
							    </li>
							    <li name="li-editar" id="li-editar" class="" >
							    	<a onClick="" href="#editar" data-toggle="tab">Editar
							    	</a>
							    </li>
							    <li name="li-ver-historial" id="li-ver-historial" class="" >
							    	<a onClick="" href="#historial" data-toggle="tab">Ver Historial 
							    	</a>
							    </li>
			
							</ul>
						</div>
						
						
						<!--Barra de busqueda-->
						<form action="verArticulo.php" method="POST">
							<div class="col-xs-11 col-sm-11 col-md-3">
							<div class="input-group">
						      <input name="text-buscador" id="text-buscador" type="text" placeholder="Buscar en Wikilinks" class="form-control">
						      <span class="input-group-btn">
						        <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search">
									</span>
								</button>
						      </span>
						    </div>
						</div>
						</form>
							

						<!--Insertar pagina externa dentro de esta pagina-->						
						<div class="tab-content" id="">
							
							<!--Div que muestra actualmente al presionar el boton Articulo o Leer-->
							<div class="tab-pane fade col-xs-12 col-lg-12 in active" id="articulo">
							<?php
							
								echo $contenido;
							/*
									if (isset($fila)) {
										echo "<h2>".$fila['NOMBRE_ARTICULO']."</h2>";
										echo "<p>".$fila['CONTENIDO']."</p>";
								}else{
									echo "<h1>Busqueda no encontrada</h1>";
								}
							$conexion->cerrarConexion();
							*/
						
							?>
							</div>

							<!--Formulario de discucion del articulo-->
							<div class="tab-pane fade col-xs-12 col-lg-12" id="discusion">
								<h2>Discusión</h2>
								  <p>Puedes dejar tu opinión sobre el tema del artículo.</p>

								  <div class="well">
								    <div class="form-group">
								      <label for="comment">Comentar:</label>
								      <textarea class="form-control" rows="5" id="comment"></textarea>
								    </div>
								    <button type="button" class="btn btn-default">Publicar</button>
								  </div>
								  
								  <?php 
								  	
								  		echo '<div class="well">
										    <table class="table table-hover">
										      <thead>  
										        <tr>
										          <th>Juan Lopez</th>
										          <th>12/03/16</th>
										        </tr>
										      </thead>
										    </table>
										    <p>Muy bien redactado, me parece muy interesante la informacion publicada.</p>
										  </div>';
								  	
								  	
									?>
								   
							</div>

							<!--Ventana interna para editar articulo-->
							<div class="tab-pane fade col-xs-12 col-lg-12 well" id="editar">								
								<form method="POST">	
									<h1>Crea un nuevo artículo</h1>
									        	<input type="submit" class="btn btn-default" value="Guardar edición">
									<textarea id="area-editor" name="area-editor">
										<?php
											
												echo $contenido ;
										?>
									</textarea>
									
								</form>

							</div>

							<!--Ver historial de modificaciones-->
							<div class="tab-pane fade col-xs-12 col-lg-12" id="historial">
								<div class="container">
								  <h2>Historial</h2>
								  <p>Historial de modificaciones hechas por usuarios.</p>            
								  <table class="table table-hover">
								    <thead>
								      <tr>
								        <th>Usuario</th>
								        <th>Fecha</th>
								        <th>Descripcion</th>
								      </tr>
								    </thead>
								    <tbody>
								      <?php 
								      for ($i=0; $i < 1; $i++){
									      echo '
									      <tr>
									        <td>Usuario.</td>
									        <td>05/05/17</td>
									        <td>Creacion del articulo '.$_POST['nombrearticulo'].'</td>
									      </tr>';} 
									  ?>
								    </tbody>
								  </table>
								</div>
							</div>
							
						
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

		<script src="../tinymce/js/tinymce/tinymce.min.js"></script>
		<script src="../tinymce/js/tinymce/langs/es.js"></script>
		<!-- Importa archivo html a div
		<script type="text/javascript" src="../js/manejodiv.js"></script>
		-->
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/descargarpdf.js"></script>
		<script type="text/javascript" src="../js/jspdf.min.js"></script>
		<!--js para personalizacion del editor-->
		<script>
			tinymce.init({
			  selector: '#area-editor',
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