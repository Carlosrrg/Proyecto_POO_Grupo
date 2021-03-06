﻿<?php
	include_once("../class/class_conexion.php");
	$conexion=new Conexion();
	echo $conexion->establecerConexion();

	//consulta a la tbtl_usuarios
	$sql="	SELECT 	a.CODIGO_USUARIO,
					a.CODIGO_ARTICULO,
					a.FECHA_AGREGADO,
					a.CODIGO_CUENTA,
					b.NOMBRE nombre,
					b.NUMERO_FALTAS,
					c.NUMERO_EDICIONES,
					c.FECHA_REGISTRO,
					d.NOMBRE_ARTICULO,
					d.ESTADO_ARTICULO
					FROM tbl_listas_seguimiento a
					LEFT JOIN tbl_usuarios b
					ON (a.CODIGO_USUARIO=b.CODIGO_USUARIO)
					LEFT JOIN tbl_cuentas c
					ON (a.CODIGO_CUENTA=c.CODIGO_CUENTA)
					LEFT JOIN tbl_articulos d
					ON (a.CODIGO_ARTICULO=d.CODIGO_ARTICULO)";
	$arregloArticulo=$conexion->ejecutarInstruccion($sql);
?>
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
								<li><a href="perfilUsuarioNormal.php">Ver mi perfil</a></li>
								<li><a href="subirArticulo.php">Crear Articulo</a></li>
								<li><a href="#">Ayuda</a></li>
								<li><a href="donaciones.php">Donaciones</a></li>
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
							      <li class=><a href="noticias.php">Portada</a></li>
							      <li><a href="perfilUsuarioNormal.php">Ver perfil</a></li>
							      <li><a href="login.php">Acceder</a></li>
							    </ul>
							    <ul class="nav navbar-nav">
							      <li class=><a href="registroUsuario.php">Crear una cuenta</a></li>
							      <li><a href="donaciones.php">Donaciones</a></li>
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
							    	<a href="#usuario-normal" data-toggle="tab" onClick="">Página especial
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
							<div class="tab-pane fade col-xs-12 col-lg-12 in active well" id="usuario-normal">
								<h1>Bienvenido(@), #NOMBRE DE USUARIO NORMAL#</h1><br>

								<h2>Mis articulos</h2>
							           		<table class="table table-hover">
												<tr>
												   <th scope="col">Nombre del Articulo</th>
												   <th scope="col">Ultima edicion</th>
												   <th scope="col">Numero de ediciones</th>
												   <th scope="col">Estado de articulo</th>
												   <th scope="col">Fecha de publicacion</th>
												</tr>
												<?php
													while ($linea=$conexion->obtenerFila($arregloArticulo)) {
														echo "<tr>";
															echo '<td>'.$linea["NOMBRE_ARTICULO"].'</td>';
															echo '<td>'.$linea["FECHA_REGISTRO"].'</td>';
															echo '<td>'.$linea["NUMERO_EDICIONES"].'</td>';
															echo '<td>'.$linea["ESTADO_ARTICULO"].'</td>';
															echo '<td>'.$linea["FECHA_AGREGADO"].'</td>';
														echo "</tr>";			
													}	
												?>
											</table>
											<a href="perfilUsuarioNormal.php">Perfil</a>
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
<?php
	$conexion->cerrarConexion();
?>