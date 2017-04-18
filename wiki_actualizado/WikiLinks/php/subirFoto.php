<!DOCTYPE html>
<html>
<head>
	<title>WikiLinks</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="../img/favicon.ico">

	<link rel="stylesheet" type="text/css" href="../css/style-marco.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/script-marco.js" ></script>
	<script type="text/javascript" src="../js/funciones.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/funcion.css">

</head>
	<body>
		<header>
	

		</header>
		<br>
		<div class="div1 container-fluid">
			<div class="main row">

				<div class="col-xs-12 co-sm-2 col-md-2 col-lg-2 hidden-xs hidden-sm">
					<img src="../img/wiki.png"width="145" alt="Logo de Wikilinks">
					<a href="../index.html"><img src="../img/Wikilinkslanding.png" width="145"></a>
					
					<!--Menu lateral izquierdo-->
					
					<div class="">            
					  <table class="table table-hover">
						<tr><td>
							<ul class="list-group2">
								<li><a href="../Index.html">Portada</a></li>
								<li><a href="../php/SubirFoto.php">Subir foto</a></li>
								<li><a href="../php/reporteArticulo.php">Reportar Articulo</a></li>
								<li><a href="../php/usuarioModerador.php">Moderador</a></li>
								<li><a href="../php/subirArticulo.php">Crear paginas nuevas</a></li>
								<li><a href="">Pagina aleatoria</a></li>
								<li><a>Ayuda</a></li>
								<li><a href="#">Donaciones</a></li>
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
						<div   class=" col-md-12 col-lg-8 ">
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
							      <li class=><a href="../Index.html">Inicio</a></li>
							      <li><a href="../Principal.html">Aleatorio</a></li>
							      <li><a href="#">Cercano</a></li>
							    </ul>
							    <ul class="nav navbar-nav">
							      <li class=><a href="../php/login.php">Acceder</a></li>
							      <li><a href="../php/registroUsuario.php">Crear una cuenta</a></li>
							      <li><a href="../retroAlimentacion.html">Feedback</a></li>
							    </ul>
							 
							  </div>
							</nav>
						</div>
						
						
						

						<!--Insertar pagina externa dentro de esta pagina-->						
						<div class="col-xs-12 col-lg-12">
							<div class="col-md-6 portfolio-item"> 
							<center><h3>Toma una foto para subirla. </h3></center>
						       

										<div >
											<img src="" id="imagen" width="320" height="240">
											<video id="video"></video>
											<canvas id="canvas"></canvas>
											<button id="camara">Capturar</button>
											<button id="guardar">Guardar</button>
										</div>
  
						    </div>

						         
						
						</div>
					</div>	
				
				</div>
			</div>
		<br><br><br>
		<footer >-Programacion Orientada a Objetos 1500-</footer>
		<br>
		</div>
	</body>
</html>