<?php
	include_once("../class/class_conexion.php");
	include_once("../class/class-donacion.php");
	$conexion = new Conexion();
	$conexion->establecerConexion();

	
	$donacion = new Donacion($_POST['txt-monto'], $_POST['date-fecha'], $_POST['txt-codigo']);
	$donacion->toString();
	$donacion->guardarDonacion($conexion);

 	$conexion->cerrarConexion();
?>


<!DOCTYPE html>
<html>
<head>
	<title>WikiLinks</title>
	<meta charset="UTF-8">
	<link rel="icon" type="../image/png" href="../img/favicon.ico" />

	<link rel="stylesheet" type="text/css" href="../css/style-marco.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min.css">

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../css/estilos.css">

</head>
	<body>
		<div class="div1 container-fluid ">
			<div class="main row">

				<div class="col-xs-12 co-sm-2 col-md-2 col-lg-2 hidden-xs hidden-sm">
					<img src="../img/wiki.png" width="145" alt="Logo de Wikilinks">
					<a href="../index.html"><img src="../img/Wikilinkslanding.png" width="145"></a>
					<br>
					<br>	
				</div>
				
				<div class="col-md-10 ">
					<div class="row " >
						<div class="col-md-6 " >
							<center>
								<h1>"Gracias por tu donacion,<strong><?php if (isset($_POST['txt-usuario'])){echo $_POST['txt-usuario'];} {
									# code...
								}?></strong>  personas como tu contribuyen grandemente a nuestro crecimiento"</h1></q>
							</center>
								
						</div>
						
					<div class="col-md-5 panel panel-default " style="align-items: center;">								
								<form action="formulario-tarjeta.php" id="form-donacion" method="post" class="formulario">
									<div class="radio" >
										<table id="table-form" style='' class="table"
										<th colspan="4"><center><strong>Cantidad a donar</strong></center></th>
										   	<tr >
										        <td colspan="2">
											        <input type="radio" name="frecuencia" id="solo-una-vez" value="olo-una-vez">
													<label for="solo-una-vez">Una Vez</label>
												</td>
												<td colspan="2">
													<input type="radio" name="frecuencia" id="mensual" value="mensual">
													<label for="mensual">Mensual</label>
												</td >

										    </tr>

										    <tr>

										        <td>
										        	<input type="radio" name="cantidad" id="100" value="100">
													<label for="100">100</label>
												</td>
										        <td>
													<input type="radio" name="cantidad" id="200" value="200">
													<label for="200">200</label>
												</td >
												<td>
													<input type="radio" name="cantidad" id="400" value="400">
													<label for="400">400</label>
												</td >
												<td>
													<input type="radio" name="cantidad" id="1000" value="1000">
													<label for="1000">1000</label>
												</td >
										    </tr>
										    <tr>
										        <td>
										        	<input type="radio" name="cantidad" id="1500" value="1500">
													<label for="1500">1500</label>
												</td>
										        <td>
													<input type="radio" name="cantidad" id="2000" value="2000">
													<label for="2000">2000</label>
												</td >
												<td>
													<input type="radio" name="cantidad" id="4500" value="4500">
													<label for="4500">4500</label>
												</td >
												<td>
													<input placeholder="otro" type="text" size="5" name="otro" id="otro">
												</td >
										    </tr>
										    <tr>
										        <td colspan="4">
										        <center><input type="submit" name="btn-tarjeta" value="Donar con tarjeta credito/debito " class="btn btn-default"></center>
										        	
												</td>
										    </tr>
										       <tr>
										        <td colspan="4">
										        <center><input type="image" name="btn-paypal" src="../img/paypal.png" class="btn btn-default" height="40"></center>
										        	
												</td>
										    </tr>
										    
										    <tr><br>
										    	<td class="container" colspan="4">
										    		<center><h4><strong>¿A qué se destinan tus donaciones?</strong></h4></center>
										    		<p>
														<strong>Tecnología:</strong> Servidores, ancho de banda, mantenimiento, desarrollo. Wikipedia es una de los sitios web más visitado del mundo, pero funciona con una fracción de los que otros sitios gastan.<br><br>
														<strong>Personal:</strong> Los otros 10 sitios web más vistos tienen miles de asalariados. Nosotros solo tenemos 300 empleados, por lo cual su donación constituye una excelente inversión en una organización sin fines de lucro altamente eficiente.
								      				</p>
										    	</td>
										    </tr>

								      	</table>     	

								    </div>
								</form>
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