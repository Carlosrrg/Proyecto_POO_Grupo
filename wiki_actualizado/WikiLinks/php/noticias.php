<?php 
session_start(); 
	if(!isset($_SESSION['codigo_usuario']))
		header("Location: index.php");

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>WikiLinks</title>
	<meta charset="UTF-8">
	<link rel="icon" type="../image/png" href="../img/favicon.ico">

	<link rel="stylesheet" type="text/css" href="../css/style-marco.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../noticias.css">
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/script-marco.js" ></script>

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
								<li><a href="noticias.php">Portada</a></li>
								<li><a href="reportarArticulo.php">Reportar Articulo</a></li>
								<li><a href="#">Moderador</a></li>
								<li><a href="subirArticulo.php">Crear articulo</a></li>
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
							  	   
							    <a class="navbar-brand" href="../index.html">Wikilinks</a>
							  </div>

							 
							  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
							       otro elemento que se pueda ocultar al minimizar la barra -->
							  <div class="collapse navbar-collapse navbar-ex1-collapse">
							    <ul class="nav navbar-nav">
							      <li><a href="noticias.php">Portada</a></li>
								<li><a href="reportarArticulo.php">Reportar Articulo</a></li>
								<li><a href="#">Moderador</a></li>
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
							    	<a href="#noticias" data-toggle="tab" onClick="">	Noticias
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
							    	<a onClick="" href="#noticias" data-toggle="tab">Leer
							    	</a>
							    </li>
							    <li name="li-ver-historial" id="li-ver-historial" class="" >
							    	<a onClick="" href="#ver-historial" data-toggle="tab">Ver Historial 
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
						 	<!--Div que muestra actualmente al presionar el boton Noticias o Leer-->
							<div class="tab-pane fade col-xs-12 col-lg-12 in active" id="noticias">
						 		
							<!-- Aqui comienza contenido de seccion de noticias -->

						 		<!-- Seccion de Inicio -->
								

								<div class="container col-xs-12 col-lg-12 " style="margin: 5px;">
									<div id="div-inicio" class="col-xs-12 panel panel-primary" style="margin-top: 30px; background-color: #F2F5FD; opacity: 4; ">
										<table class="table"> 
										    <tr>
										        <td>
											        <h3><a href="principal.html">Bienvenidos</a> a Wikilinks, </h3>
											        la enciclopedia de contenido libre que todos pueden <a href="">editar.</a>
										        </td>
										        <td style="text-align: right;">
										        <script type="text/javascript">
													var d = new Date();
													var d=new Date();
													var dia=new Array(7);
													dia[0]="Domingo";
													dia[1]="Lunes";
													dia[2]="Martes";
													dia[3]="Miercoles";
													dia[4]="Jueves";
													dia[5]="Viernes";
													dia[6]="Sabado";
													var mm=new Date();
													var m2 = mm.getMonth() + 1;
													var mesok = (m2 < 10) ? '0' + m2 : m2;
													var mesok=new Array(12);
													mesok[0]="Enero";
													mesok[1]="Febrero";
													mesok[2]="Marzo";
													mesok[3]="Abril";
													mesok[4]="Mayo";
													mesok[5]="Junio";
													mesok[6]="Julio";
													mesok[7]="Agosto";
													mesok[8]="Septiembre";
													mesok[9]="Octubre";
													mesok[10]="Noviembre";
													mesok[11]="Diciembre";


													document.write
													(
														d.getHours(),':'+d.getMinutes(),':'+d.getSeconds(),', '+dia[d.getDay()], '<br>'+
														d.getDate(),' de '+ mesok[mm.getMonth()],' de '+d.getFullYear(),'<br> 1 331 871 artículos en español.'
													);
												</script></td>
										    </tr>
										</table>
									</div>

									<!-- Seccion de Informacion -->
									<div class="container-fluid row">
										<div class="col-md-6 panel panel-primary" style="background-color: #F2F5FD; opacity: 4;" >
											<center>
												<label><a href="">Participacion y Comunidad*  </a></label><br>
												<p>
													<a href="">¿Cómo colaborar?*  </a>
													<a href="">Bienvenida* </a>
													<a href="">¿Eres profesor o alumno?*  </a>
													<a href="">Primeros pasos* </a>
													<a href="">Contenidos de ayuda*  </a>
													<a href="">Preguntas frecuentes *  </a>
												</p>
											</center>
										</div>

										<div class="col-md-6 panel panel-primary" style="background-color: #F2F5FD; opacity: 4;"  >
											<center>
												<label><a href="">Busquedas y consultas</a></label>
												<p>
													<a href="">Portales tematicos</a>
													<a href="">Explorar Wikipedia</a><br>

												</p>
											</center><br>
										</div>
									</div>


									<div class="container-fluid row">
										<!-- parte izquierda -->
										<div class="col-md-6 panel panel-primary" style="background-color: #F2F5FD; opacity: 4;" >
											<center>
												<span class="glyphicon glyphicon-star"></span>
													<heater>
														<label><a href="">Articulo Destacado</a></label>
													</heater>
											</center>
											<div class="row padding">
												<!-- Titulo del articulo -->
												<div class="panel panel-default col-md-12">
													<h1 id="firstHeading" class="firstHeading" lang="es">
														Universidad Nacional Autónoma de Honduras
													</h1>
													
													<!-- Imagen del articulo -->
													<div >
														<img src="../img/tabla-unah.png" style="float: right">
													</div>
													<!-- contenido del articulo -->
													<p>
														La <strong>Universidad Nacional Autónoma de Honduras (UNAH)</strong> es una institución autónoma, laica y estatal de la república de Honduras, con personalidad jurídica, que goza de la potestad de organizar, gestionar y desarrollar la educación superior del país, en los niveles de licenciatura, de segunda especialidad y en los grados: bachillerato, maestría, doctoral. Por mandato constitucional, contribuirá a la investigación científica, humanística y tecnológica, a la difusión general de la cultura y al estudio y análisis de los problemas nacionales con el fin de participar en la transformación de la nación hondureña.
													</p>
													<p>
														Actualmente, su sede se ubica en la Ciudad Universitaria de la UNAH que lleva el nombre del primer rector de la universidad, el presbítero José Trinidad Reyes.
													</p>

													<h3>Historia</h3>
													<p>
														El 14 de diciembre de 1845, se fundó el primer centro de estudios superiores de Honduras "La Sociedad del Genio Emprendedor y del Buen Gusto", gracias a la iniciativa del presbítero José Trinidad Reyes quien fungió como primer rector, a esta iniciativa se sumaron los estudiantes Máximo Soto, Alejandro Flores, Miguel Antonio Rovelo, Yanuario Girón y Pedro Chirinos.
													</p>
													<p>
														Dicha sociedad que era de carácter privado, recibió protección del gobierno del país, desde el 10 de marzo de 1846, bajo el nombre de Academia Literaria de Tegucigalpa.
													</p>

													<h3>Fundación</h3>
													<p>
														El 10 de marzo de 1846 el Congreso otorgó título de Academia Literaria de Tegucigalpa a la sociedad, siendo el presidente don Coronado Chávez, quien brindó apoyo a este centro educativo; luego el 19 de septiembre de 1847 siendo presidente, Licenciado Juan Lindo, elevó la academia a rango de Universidad Central, ubicada en Tegucigalpa. Se impartían clases de derecho civil, filosofía, letras y teología. El primer local de la Universidad fue el convento de San Francisco. Luego se trasladó al edificio contiguo de la iglesia La Merced.2
													</p>
													<p>
														Fue así como el 19 de septiembre de 1847, de ello hace 170 años, se inauguró solemnemente la Universidad, en ceremonia pública, encabezada por el Presidente Juan Lindo, el nombrado Rector José Trinidad Reyes, el Obispo de Honduras Francisco de Paula Campoy y Pérez. En 1849 la sede de la Universidad fue el Convento de San Francisco situado en el actual parque Valle de Tegucigalpa, el primer graduado de esta casa de estudios fue Sinforiano Rovelo, como bachiller en filosofía.
													</p>
													<p>
														El 2 de julio de 1850 las cámaras legislativas de Comayagua, aprueban los "Estatutos de la Universidad del Estado de Honduras", al año siguiente 1851 el folleto de los estatutos, ya impreso consigna: "Tegucigalpa, Imprenta de la academia, 1851"3
													</p>
													<p>
														Después, en 1869 la sede de la Universidad pasó al edificio contiguo a la iglesia La Merced, allí permaneció hasta que fue trasladada a lo que es ahora la Ciudad Universitaria, cuya construcción había comenzado el 30 de junio de 1965.
													</p>
													<h3>Autonomía</h3>
													<p>
														La Universidad Nacional Autónoma de Honduras conquistó la Autonomía el día 15 de octubre de 1957 en virtud del Decreto No. 170 emitido por la Junta Militar del Gobierno, constituida por los oficiales señores General Roque Rodríguez, Coronel Héctor Caraccioli Moncada y Mayor e Ingeniero Roberto Gálvez Barnes. En donde Congreso se comprometió a dar el 6% del presupuesto de la república a la Universidad para hacerse cargo de la educación superior en el país.
													</p>
													<p>
														la “Ley Orgánica de la Universidad Nacional Autónoma de Honduras” de 1957 estuvo vigente hasta el 11 de febrero de 2005, cuando fue sustituida por la nueva Ley aprobada por el Congreso Nacional según decreto No.209-2004.</p>
													<h3>Centros Universitarios</h3>
													<p>
														La Universidad Nacional de Honduras creció y como ya contaba con un mejor presupuesto, se cambió de ubicación y comenzó a ser construida el 30 de junio de 1965.
													</p>
													<p>
														Se construyeron varios edificios en su nueva ubicación donde desde entonces tiene amplios terrenos de su propiedad otorgados por el gobierno de la república de Honduras, en total tienen un área de 1.680.000 metros cuadrados, que hasta el día de hoy no han sido utilizados en su mayoría aún en la actualidad, además dispone de amplias áreas verdes y varios estacionamientos automovilísticos.
													</p>
													<p>
														Está ubicada en la zona noroeste de la capital, entre el bulevar Suyapa y el anillo periférico, cuenta con un área muy grande, varios edificios y estacionamientos.

														Edificios en la Ciudad Universitaria. En la Ciudad Universitaria se encuentran los edificios de las facultades de Ingeniería, Ciencias Económicas, Ciencias, Odontología, Ciencias Jurídicas, Ciencias Sociales, Ciencias Espaciales, Humanidades y Arte, Química y Farmacia, Auditorio Juan Lindo, Administración y Biblioteca.

														El 19 de septiembre de 2013 se inauguró el Palacio Universitario de la Universidad Nacional Autónoma de Honduras, un moderno polideportivo con un costo de 700 millones de lempiras (35 millones US$). Durante la administración de la rectora Julieta Castellanos Se han edificado nuevos accesos, que facilitan el ingreso al campus, así como la terminación de proyectos de construcción que habían quedado varados por falta de fondos.
													</p>
													<p>
														El presupuesto dedicado a la investigación, desarrollo e innovación en Honduras sigue siendo uno de los más bajos de Latinoamérica, y la UNAH es el mayor exponente nacional en este campo, aun cuando dedica menos de 250 millones de Lempiras anuales (5 % de su presupuesto) a este campo. En 2014 ha presentado planes para el desarrollo de laboratorios en edificios de Arquitectura e Ingeniería. La UNAH todavía cuenta con un nivel de investigación bajo

													</p>
													<strong aling="left" ><a  href="">Leer mas..</a></strong>
												</div>
											</div>
										</div>





										 <!-- Parte derecha -->
										<div class="col-md-6 panel panel-primary" style="background-color: #F2F5FD; opacity: 4;" >
											<center>
												<span class="glyphicon glyphicon-globe"></span>
													<heater>
														<label><a href="">Actualidad</a></label>
													</heater>
											</center>
											<div class="row padding">
												<!-- Titulo del articulo -->
												<div class="panel panel-default col-md-12">
													<h1 id="firstHeading" class="firstHeading" lang="es">
														Internet Profunda(Deep Web)
													</h1>
													
													<!-- Imagen del articulo -->
													<div >
														<img src="../img/deepweb.jpg" style="float: right; width: 307px; height: 340px;">
													</div>
													<!-- contenido del articulo -->
													<p>
														La <strong>Deep Web</strong>Se conoce como internet profunda,internet invisible o internet oculta al contenido de internet que no es indexado por los motores de búsqueda convencionales, debido a diversos factores.4 El término se atribuye al informático Mike Bergman.Es el opuesto al Internet superficial.
													</p>
													

													<h3>Origen</h3>
													<p>
														La principal causa de la existencia del internet profunda es la imposibilidad de los motores de búsqueda (DuckDuckGo, Google, Yahoo, Bing, etc.) de encontrar o indexar gran parte de la información existente en internet. Si los buscadores tuvieran la capacidad para acceder a toda la información entonces la magnitud de la «internet profunda» se reduciría casi en su totalidad. No obstante, aunque los motores de búsqueda pudieran indexar la información del internet profunda esto no significaría que esta dejará de existir, ya que siempre existirán las páginas privadas. Los motores de búsqueda no pueden acceder a la información de estas páginas y sólo determinados usuarios, aquellos con contraseñas o códigos especiales, pueden hacerlo.
													<h3>Tamaño</h3>
													<p>
														La internet profunda es un conjunto de sitios web y bases de datos que buscadores comunes no pueden encontrar ya que no están indexadas. El contenido que se puede hallar dentro de la internet profunda es muy amplio.
													</p>
													<p>
														El internet se ve dividido en dos ramas, La internet profunda y la superficial. La internet superficial se compone de páginas estáticas o fijas, mientras que la web profunda está compuesta de páginas dinámicas. Las páginas estáticas no dependen de una base de datos para desplegar su contenido sino que residen en un servidor en espera de ser recuperadas, y son básicamente archivos HTML cuyo contenido nunca cambia. Todos los cambios se realizan directamente en el código y la nueva versión de la página se carga en el servidor. Estas páginas son menos flexibles que las páginas dinámicas. Las páginas dinámicas se crean como resultado de una búsqueda de base de datos. El contenido se coloca en una base de datos y se proporciona sólo cuando lo solicite el usuario.
													</p>
													<h3>Denominacion</h3>
													<p>
														Son páginas de texto, archivos, o en ocasiones información a la cual se puede acceder por medio de la World Wide Web que los buscadores de uso general no pueden, debido a limitaciones o deliberadamente, agregar a sus índices de páginas web.
													</p>
													<p>
														La Web profunda se refiere a la colección de sitios o bases de datos que un buscador común, como Google, no puede o no quiere indexar. Es un lugar específico del internet que se distingue por el anonimato. Nada que se haga en esta zona puede ser asociado con la identidad de uno, a menos que uno lo desee.
													</p>
											<strong aling="left" ><a  href="">Leer mas..</a></strong>
												</div>
											</div>

										</div>

										<div class="col-md-6 panel panel-primary" style="background-color: #F2F5FD; opacity: 4;" >
											<center>
												<span class="glyphicon glyphicon-ok"></span>
													<heater>
														<label><a href="">Articulo Bueno</a></label>
													</heater>
											</center>
											<div class="row padding">
												<!-- Titulo del articulo -->
												<div class="panel panel-default col-md-12">
													<h1 id="firstHeading" class="firstHeading" lang="es">
														Arquitectura bizantina
													</h1>
													
													<!-- Imagen del articulo -->
													<div >
														<img src="../img/articulobueno.jpg" style="float: right; width: 307px; height: 340px;">
													</div>
													<!-- contenido del articulo -->
													<p>
														Se denomina arquitectura bizantina al estilo arquitectónico que estuvo vigente durante el Imperio bizantino (Imperio romano de Oriente) desde la caída del Imperio romano de Occidente en el siglo V. La capital del Imperio de Oriente era Constantinopla (Constantinopolis o ciudad de Constantino), cuyo nombre anterior fue Bizancio y, actualmente, Estambul, y ello desde el año 330, momento que otros autores fijan como el inicio de la arquitectura bizantina.
													</p>
													
													<p>
														La arquitectura bizantina se inscribe dentro del marco del arte bizantino, y abarca pues un largo espacio de tiempo, que se inicia en el siglo IV y al que pone fin abruptamente la caída de Constantinopla en manos de los turcos otomanos en 1453, ya en el siglo XV. Debido a su dilatada duración en el tiempo, suele dividirse para su estudio en tres períodos diferenciados: un período inicial, un período intermedio y un período final.
													</p>

													<h3>Periodos</h3>
													<p>
														A pesar de que en los primeros momentos de su existencia la arquitectura bizantina no se distinguía especialmente de la arquitectura romana, de la que en sus primeros balbuceos constituía únicamente una mera derivación regional, la larga evolución en el tiempo de la misma permitió la emergencia consolidada de un estilo arquitectónico distintivo, que quedaba por lo demás muy permeabilizado ante las influencias que recibía de las arquitecturas orientales.
		
													<p>
														Uno de los rasgos que fueron mantenidos a lo largo de todo el período de su existencia fue el uso del ladrillo para la arquitectura de las iglesias, que sustituyó a la piedra, que era el material constructivo utilizado en su predecesora la arquitectura romana; a lo que se añade una más libre interpretación de los órdenes clásicos, la sustitución de las esculturas como elementos decorativos de los edificios por los mosaicos o el realce de las cúpulas, que se elevan a mayor altura que en otros estilos arquitectónicos anteriores.
													</p>
												
													<h3>Caracteristicas</h3>
													<p>
														La arquitectura bizantina mantuvo varios elementos de la arquitectura romana y de la paleocristiana oriental, como los materiales (ladrillo y piedra para revestimientos exteriores e interiores de mosaico), arquerías de medio punto, columna clásica como soporte, etc. Pero también aportaron nuevos rasgos entre los que destaca la nueva concepción dinámica de los elementos y un novedoso sentido espacial y, sobre todo, su aportación más importante, el empleo sistemático de la cubierta abovedada, especialmente la cúpula sobre pechinas, es decir, triángulos esféricos en los ángulos que facilitan el paso de la planta cuadrada a la circular de la cúpula.
													</p><br>
									
													<strong aling="left" ><a  href="">Leer mas..</a></strong>
											
												</div>
											</div>

										</div>
									</div>

									<div class="container-fluid row">

										<div class="col-md-6 panel panel-primary" style="background-color: #F2F5FD; opacity: 4;" >
												<center>
													<span class="glyphicon glyphicon-upload"></span>
														<heater>
															<label><a href="">Recursos del Dia</a></label>
														</heater>
												</center>
												<div class="row padding">
											<!-- Titulo del articulo -->
											<div class="panel panel-default col-md-12">
												<h1 id="firstHeading" class="firstHeading" lang="es">
													Pseudotrapelus sinaitus
												</h1>
												
												<!-- Imagen del articulo -->
												<div >
													<img src="../img/recursodeldia.jpg" style="float: right; width: 307px; height: 340px;">
												</div>
												<!-- contenido del articulo -->
												<p>
													La <strong>agama sinaí (Pseudotrapelus sinaitus)</strong> es una especie de reptil escamoso de la familia Agamidae. Es común de los desiertos que rodean el mar Rojo.
												</p>

												<h3>Descripcion</h3>
												<p>
													Su longitud es de hasta 25 cm, la cola hasta dos tercios de la longitud total. Las extremidades y la cola son largas y delgadas y ofrecen una buena capacidad de escalada. El tercer (medio) dedo del pie es el más largo en lugar del cuarto.
								
												<h3>Comportamiento</h3>
												<p>
													Es de hábitos diurnos y se alimenta de insectos y otros artrópodos, así como de plantas.

													Mientras que en el calor, el color del macho se convierte en un sorprendente azul para atraer a las hembras. La hembra adopta manchas de color marrón-rojo.
												</p>

												<h3>Sub Especies</h3>
												<p>
													Se reconocen las siguientes subespecies: <br>

													-Pseudotrapelus sinaitus sinaitus (Heyden, 1827)<br>
													-Pseudotrapelus sinaitus werneri Moravec, 2002
												</p>
												<strong aling="left" ><a  href="">Leer mas..</a></strong>

											</div>
										</div>
									</div>
								</div>



							<!--Aqui finaliza el contenido de noticias-->

							</div>
						 	
						 	<!--Div que muestra actualmente al presionar el boton Discusion-->
							<div class="tab-pane fade col-xs-12 col-lg-12" id="discusion">
								<h1>Discusion</h1>
							</div>

							<!--Div que muestra actualmente al presionar el boton ver Historial-->
							<div class="tab-pane fade col-xs-12 col-lg-12" id="ver-historial">
								<h1>Historial</h1>
							</div>

			</div>
		<br>
			<hr class="divi">

			<div class="row">
    			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<p style="text-align: center;"><strong>©Copyrigth 2017 - Proyecto de POO</strong></p>
    			</div>
    		</div>		
		</div>
		
		
		<script type="text/javascript" src="../js/registro_usuarios.js"></script>
	</body>
</html>