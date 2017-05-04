<?php 
		$codigo= "1";
		


				include_once("../class/class_conexion.php");
				$conexion = new Conexion();
				$conexion->establecerConexion();
				$usuario=$conexion->ejecutarInstruccion("SELECT NOMBRE , CORREO_ELECTRONICO , FECHA_NACIMIENTO, USERNAME ,Urlperfil FROM tbl_usuarios WHERE CODIGO_USUARIO=$codigo ");
					$fila = $conexion->obtenerFila($usuario);

				$conexion->cerrarConexion();

	?>
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
								<li><a href="ListaUsuarioModerador.php">Ver lista de articulos</a></li>
								<li><a href="listaReportesArticulosModerador.php">Ver articulos reportados</a></li>
								<li><a href="subirArticulo.php">Crear Articulo</a></li>
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
							    	<li><a href="noticias.php">Portada</a></li>
									<li><a href="ListaUsuarioModerador.php">Ver lista de articulos</a></li>
									<li><a href="listaReportesArticulosModerador.php">Ver articulos reportados</a></li>
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
							    	<a href="#usuario-moderador" data-toggle="tab" onClick="">Página especial
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
							<!--Div que muestra actualmente al presionar el boton Pagina especial-->
							<div class="tab-pane fade col-xs-12 col-lg-12 in active well" id="usuario-moderador">
							
								<h2>Datos personales de <?php  echo $fila["NOMBRE"]?></h2><br>
								<div class="col-lg-4 col-md-4 col-sm-12">
									
									<div class="input-group">


											<img src="<?php  echo $fila["Urlperfil"]?>" id="imagenPerfil" width="320" height="240" > 
											<img src="" id="imagen" width="320" height="240" > 
										    <video id="video"></video>
											<canvas id="canvas"></canvas>
											<div id="subirimagen"></div>
										


										<div>
											<button class="btn btn-default"  id="camara"  onClick="foto();" >Tomar foto</button>
											<form class="btn btn-default" method="post" id="formulario" enctype="multipart/form-data" >
    											 <input class="btn btn-default" type="file" name="file">
 													</form>
											<button class="btn btn-default" id="tomarfoto" onClick="ocultar();">Fotografiar</button>
											<button class="btn btn-default" id="guardar" onClick="guardar(<?php echo $codigo;?>);"()>Guardar</button>
										</div>

										<!--son varios botones para hacer lo de la camara-->
									</div>


								</div>
								<div class="col-lg-8 col-md-8 col-sm-12">
									<div style="width: 55%;">
										<form action="#">
											<table class="table">
												<tr><a href="#" onclick="habilitar();">Editar</a></tr>
												<tr>
													<td>Nombre completo:</td>
													<td><input type="text" name="txt-nombre-moderador" id="txt-nombre-moderador" value="<?php  echo $fila["NOMBRE"]?>" size="50px" disabled></td>
												</tr>
												<tr>
													<td>Correo:</td>
													<td><input type="text" name="txt-correo-moderador" id="txt-correo-moderador" value="<?php  echo $fila["CORREO_ELECTRONICO"]?>" size="50px" disabled></td>
												</tr>
												<tr>
													<td>Fecha de nacimiento:</td>
													<td><input type="date" name="txt-date-moderador" id="txt-date-moderador" value="<?php  echo $fila["FECHA_NACIMIENTO"]?>" size="50px" disabled></td>
												</tr>
												<tr>
													<td>Usuario:</td>
													<td><input type="text" name="txt-usuario-moderador" id="txt-usuario-moderador" value="<?php  echo $fila["USERNAME"]?>" size="50px" disabled></td>
												</tr>
												<tr>
													<td>Contrasena:</td>
													<td><input type="password" name="txt-contrasena-moderador" id="txt-contrasena-moderador" value="NOMESALE LA CONTRASENA" size="50px" disabled></td>
												</tr>
												<tr>
													<td>Especialidad:</td>
													<td><input type="text" name="txt-especialidad-moderador" id="txt-especialidad-moderador" value="Programacion" size="50px" disabled></td>
												</tr>
												<tr>
													<td>Categoria preferida:</td>
													<td><select name="slc-categoria-moderador" id="slc-categoria-moderador" disabled value="categoria 1">
														<option>categoria 1</option>
													</select></td>
												</tr>
											</table>
											<button class="btn btn-primary" id="btn-aceptar" disabled onClick="editar(<?php echo $codigo;?>);">Aceptar</button>
											<button class="btn btn-success" id="btn-no-aceptar" disabled onClick="deshabilitar();" >No editar</button>
											<button class="btn btn-danger" onClick="BorrarCuenta();">Cancelar Cuenta</button>
										</form>
									</div>
								</div>
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
		<script type="text/javascript" src="../js/funcionesPerfilUsuarioModerador.js"></script>
		
		<script type="text/javascript" src="../js/manejodiv.js"></script>
		<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="../js/descargarpdf.js"></script>
		<script type="text/javascript" src="../js/jspdf.min.js"></script>
	</body>
</html>