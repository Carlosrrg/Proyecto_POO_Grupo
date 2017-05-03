<!DOCTYPE html>
<html>
<head>
	<title>WikiLinks</title>
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
					<img src="../img/wiki.png" width="145" alt="Logo de Wikilinks">
					<br><br>
					<a href="../index.html"><img src="../img/Wikilinkslanding.png" width="145"></a>
					<br><br>
					<!--Menu lateral izquierdo-->
					
					<div class="">            
					  <table class="table table-hover">
						<tr><td>
							<ul class="list-group2">
								<li><a href="../noticias.html">Portada</a></li>
								<li><a href="perfilUsuarioModerador.php">Ver mi perfil</a></li>
								<li><a href="ListaUsuarioModerador.php">Ver lista de articulos</a></li>
								<li><a href="subirArticulo.php">Crear articulo</a></li>
								<li><a href="#">Ayuda</a></li>
								<li><a href="../donaciones.html">Donaciones</a></li>
							</ul>
						</td></tr>
						
						<tr><td>
							<h6 class="list-left">Imprimir/Exportar</h6>
							<ul class="list-group1">
								<li><a>Crear un libro</a></li>
								<li><a>Version para imprimir</a></li>
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
								<li><a href="#">Lo que enlaza aqui</a></li>
								<li><a href="#">Cambios en enlazadas</a></li>
								<li><a href="#">Subir archivo</a></li>
								<li><a href="#">Paginas especiales</a></li>
								<li><a href="#">Enlace permanete</a></li>
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
							  	   
							    <a class="navbar-brand" href="../index.html">Wikilinks</a>
							  </div>

							 
							  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
							       otro elemento que se pueda ocultar al minimizar la barra -->
							  <div class="collapse navbar-collapse navbar-ex1-collapse">
							 	<ul class="nav navbar-nav">
							      <li class=><a href="../noticias.html">Portada</a></li>
							      <li><a href="perfilUsuarioModerador.php">Ver perfil</a></li>
							      <li><a href="ListaUsuarioModerador.php">Ver lista de articulos</a></li>
							      <li><a href="login.php">Acceder</a></li>
							    </ul>
							    <ul class="nav navbar-nav">
							      <li class=><a href="registroUsuario.php">Crear una cuenta</a></li>
							      <li><a href="../donaciones.html">Donaciones</a></li>
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
						
						<div class="col-sm-9 col-md-9 hidden-xs hidden-sm">
							<ul class="nav nav-tabs">
							    <li id="li-articulo" name="li-articulo" class="active" >
							    	<a href="#reporte-moderador" data-toggle="tab" onClick="">Página especial
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
						<div class="tab-content" id="">
							<!--Div que muestra actualmente al presionar el boton Articulo o Leer-->
							<div class="tab-pane fade col-xs-12 col-lg-12 in active well" id="reporte-moderador">
								<h1>Articulos Reportados</h1><br>
									<form action="">
						           		<table class="table table-hover" style="width: 70%">
											<tr>
											  <th scope="col">Articulo</th>
											  <th scope="col">Usuario de articulo</th>
											  <th scope="col">N. Reportes</th>
											  <th scope="col">Accion</th>
											</tr>
										 
											<tr>
												<td><a href="#">Nombre articulo 1</a></td>
											    <td><a href="#">Nombre usuario 1</a></td>
											    <td><a href="listaReportesPorUsuarios.php">45</a></td>
											    <td>
											    	<button class="btn btn-warning" id="btn-cancelar" name="btn-cancelar">Solicitar cancelar cuenta de usuario</button>
											    </td>
											</tr>
											<tr>
												<td><a href="#">Nombre articulo 2</a></td>
											    <td><a href="#">Nombre usuario 2</a></td>
											    <td><a href="listaReportesPorUsuarios.php">95</a></td>
											    <td>
											    	<button class="btn btn-warning" id="btn-cancelar" name="btn-cancelar">Solicitar cancelar cuenta de usuario</button>
											    </td>
											</tr>
											<tr>
												<td><a href="#">Nombre articulo 3</a></td>
											    <td><a href="#">Nombre usuario 3</a></td>
											    <td><a href="listaReportesPorUsuarios.php">10</a></td>
											    <td>
											    	<button class="btn btn-warning" id="btn-cancelar" name="btn-cancelar">Solicitar cancelar cuenta de usuario</button>
											    </td>
											</tr>
											<tr>
												<td><a href="#">Nombre articulo 4</a></td>
											    <td><a href="#">Nombre usuario 4</a></td>
											    <td><a href="listaReportesPorUsuarios.php">20</a></td>
											    <td>
											    	<button class="btn btn-warning" id="btn-cancelar" name="btn-cancelar">Solicitar cancelar cuenta de usuario</button>
											    </td>
											</tr>
											<tr>
												<td><a href="#">Nombre articulo 5</a></td>
											    <td><a href="#">Nombre usuario 5</a></td>
											    <td><a href="listaReportesPorUsuarios.php">15</a></td>
											    <td>
											    	<button class="btn btn-warning" id="btn-cancelar" name="btn-cancelar">Solicitar cancelar cuenta de usuario</button>
											    </td>
											</tr>
										</table>
							      	</form>
							</div>
						</div>	
					</div>
				</div>
				</div>
			</div>
			<br><br><br>
			<hr class="divi">
			<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<p style="text-align: center;"><strong>©Copyrigth 2017 - Proyecto de POO</strong></p>
    			</div>
    		</div>
			<br>
		</div>
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/script-marco.js"></script>
		<script type="text/javascript" src="../js/manejodiv.js"></script>
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/descargarpdf.js"></script>
		<script type="text/javascript" src="../js/jspdf.min.js"></script>
	</body>
</html>