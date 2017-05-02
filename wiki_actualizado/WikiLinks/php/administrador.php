<!DOCTYPE html>
<html>
<head>
	<title>WikiLinks</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="img/favicon.ico" />

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
					<a href="../index.html"><img src="../img/Wikilinkslanding.png" width="145"></a>
					
					<!--Menu lateral izquierdo-->
					
					<div class="">            
					  <table class="table table-hover">
						<tr><td>
							<ul class="list-group2">
								<li><a href="#">Portada</a></li>
								<li><a href="administradorVerModeradores.php">Moderadores de Wikilinks</a></li>
								<li><a href="subirArticulo.php">Crear paginas nuevas</a></li>
								<li><a>Ayuda</a></li>
								<li><a href="#">Donaciones</a></li>
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
							  	   
							    <a class="navbar-brand" href="#">Wikilinks</a>
							  </div>

							 
							  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
							       otro elemento que se pueda ocultar al minimizar la barra -->
							  <div class="collapse navbar-collapse navbar-ex1-collapse">
							 	<ul class="nav navbar-nav">
							      <li class=><a href="../Index.html">Crear una nueva pagina</a></li>
							      <li><a href="../Principal.html">Moderadores de Articulos</a></li>
							      <li><a href="#">Acceder</a></li>
							    </ul>
							    <ul class="nav navbar-nav">
							      <li class=><a href="login.php">Crear una cuenta</a></li>
							      <li><a href="registroUsuario.php">Ayuda</a></li>
							      <li><a href="../Feedback.html">Feedback</a></li>
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
									<a href="../retroAlimentacion.html">Feedback</a>&nbsp;&nbsp;

								</h6>
							</div>
						</div>
						
						<div class="col-sm-4 col-md-5 hidden-xs hidden-sm">
							<ul class="nav nav-tabs">
							    <li id="li-articulo" name="li-articulo" class="">
							    	<a href="javascript:articulo();">	Articulo
							    	</a>
							    </li>
							    <li id="li-discusion" name="li-discusion" class="">
							    	<a onClick="loadPages('Articulos/Discusion.html', 
							    	'li-discusion', 
							    	'li-articulo',
							    	'li-leer',
							    	'li-editar',
							    	'li-ver-historial')" href="javascript:noarticulo();">Discusion
							    	</a>
							    </li>
							   
							</ul>
						</div>
						<div class="col-sm-4 col-md-4 col- hidden-xs hidden-sm">
							<ul class="nav nav-tabs">
							    <li name="li-leer" id="li-leer" class="">
							    	<a onClick="loadPages('Articulos/Unah.html',
							    	'li-leer', 
							    	'li-articulo',
							    	'li-editar',
							    	'li-discusion',
							    	'li-ver-historial')" href="javascript:noarticulo();">	Leer
							    	</a>
							    </li>
							    <li name="li-editar" id="li-editar" class="">
							    	<a onClick="loadPages('EditorTexto/Editor.html',
							    	'li-editar', 
							    	'li-articulo',
							    	'li-leer',
							    	'li-discusion',
							    	'li-ver-historial')" href="javascript:noarticulo();">Editar
							    	</a>
							    </li>
							    <li name="li-ver-historial" id="li-ver-historial" class="">
							    	<a onClick="loadPages('Articulos/Historial.html',
							    	'li-ver-historial', 
							    	'li-articulo',
							    	'li-leer',
							    	'li-editar',
							    	'li-discusion')" href="javascript:noarticulo();">Ver Historial
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
						</div><br><br><br><br><br><br><br>
						<div class="container">
							<h1>Bienvenido(@), #NOMBRE DEL ADMINISTRADOR#</h1><br>
							<h2>Notificaciones de moderadores pendientes</h2>
								<form id="val-admin" action="">
					           		<table class="table table-hover">
									  	<tr>
										    <th scope="col">N. Notificacion</th>
										    <th scope="col">Nombre del moderador</th>
										    <th scope="col">Solicitud</th>
										    <th scope="col">Descripcion</th>
										    <th scope="col">Accion</th>
									  	</tr> 
									  	<tr>
										    <td>1</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>
										    	<button class="btn btn-danger">Aprobar cancelacion</button>&nbsp;
										    	<button class="btn btn-warning">Posponer solicitud</button>&nbsp;
										    </td>
										</tr>
										<tr>
										    <td>2</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>
										    	<button class="btn btn-danger">Aprobar cancelacion</button>&nbsp;
										    	<button class="btn btn-warning">Posponer solicitud</button>&nbsp;
										    </td>
										</tr>
										<tr>
										    <td>3</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>
										    	<button class="btn btn-danger">Aprobar cancelacion</button>&nbsp;
										    	<button class="btn btn-warning">Posponer solicitud</button>&nbsp;
										    </td>
										</tr>
									</table>
						      	</form><br>
						    <h2>Solicitudes aplasadas</h2>
						    	<form id="val-admin" action="">
					           		<table class="table table-hover">
									  	<tr>
										    <th scope="col">N. Notificacion</th>
										    <th scope="col">Nombre del moderador</th>
										    <th scope="col">Solicitud</th>
										    <th scope="col">Descripcion</th>
										    <th scope="col">Accion</th>
									  	</tr> 
									  	<tr>
										    <td>1</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>
										    	<button class="btn btn-danger">Aprobar cancelacion</button>&nbsp;
										    </td>
										</tr>
										<tr>
										    <td>2</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>
										    	<button class="btn btn-danger">Aprobar cancelacion</button>&nbsp;
										    </td>
										</tr>
										<tr>
										    <td>3</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>
										    	<button class="btn btn-danger">Aprobar cancelacion</button>&nbsp;
										    </td>
										</tr>
									</table>
						      	</form><br>
						    <h2>Historial de cuentas canceladas</h2>
						    	<form id="val-admin" action="">
					           		<table class="table table-hover">
									  	<tr>
										    <th scope="col">N. Notificacion</th>
										    <th scope="col">Nombre del moderador</th>
										    <th scope="col">Solicitud</th>
										    <th scope="col">Descripcion</th>
										    <th scope="col">Usuario que se cancelo</th>
									  	</tr> 
									  	<tr>
										    <td>1</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>Peres145</td>
										</tr>
										<tr>
										    <td>2</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>Peres145</td>
										</tr>
										<tr>
										    <td>3</td>
										    <td><a href="#">Ramon perez</a></td>
										    <td>Cancelar Cuenta de Usuario</td>
										    <td>Problemas con muchos reportes de otro usuarios.</td>
										    <td>Peres145</td>
										</tr>
									</table>
						      	</form><br>  		
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