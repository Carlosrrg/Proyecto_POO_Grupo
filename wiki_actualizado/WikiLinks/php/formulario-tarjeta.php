

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
		<header>
	

		</header>
		<br>
		<div class="div1 container-fluid ">
			<div class="main row">

				<div class="col-xs-12 co-sm-2 col-md-2 col-lg-2 hidden-xs hidden-sm">
					<img src="../img/wiki.png" width="145" alt="Logo de Wikilinks">
					<a href="../noticias.html"><img src="../img/Wikilinkslanding.png" width="145"></a>
					<br>
					<br>	
				</div>
				
				<div class="col-md-10 ">
					<div class="row " >
						<div class="col-md-6 " >
							<center>
								<h1>"Imagina un mundo donde cada persona del planeta tuviera acceso libre a la suma de todo el conocimiento humano."</h1><br>
								<q>Programacion Orientada a Objetos 2017</q>
							</center>
								
						</div>
						
						<div class="col-md-5 panel panel-default " style="align-items: center;">								
								<form action= "agradecimiento.php" class="inline-form" method="POST">
								<center><h3>Datos de Facturacion:</h3></center>
								<center><strong><h2 style="color: #006699"></h2></strong></center>
									<table class="table table-hover">
									   	<tr>
									    	<td colspan="2"><input id="txt-usuario" name="txt-usuario" placeholder="Ingrese su nombre y apellido" type="text" class="form-control"><br>
									    	</td>
									    </tr>
									    <tr>
									    	<td colspan="2"><input  id="txt-monto" name="txt-monto"  type="text" class="form-control" value=<?php 

								
								if (isset($_POST['cantidad'])) {
									$cantidad = $_POST['cantidad'];
									if ($cantidad == '100') {
									echo '"100"';
								}else{
									if ($cantidad == '200') {
									echo '"200"';
									} else{
										if ($cantidad == '400') {
											echo '"400"';
										} else {
											if ($cantidad == '1000') {
												echo '"1000"';
											}else{
												if ($cantidad == '1500') {
													echo '"1500"';
												}else{
													if ($cantidad == '2000') {
														echo '"2000"';

													}else{
														if ($cantidad == '4500') {
															echo '"4500"';
														} 
													}

												}
											}
										}
									}
								}
								}else{
									echo'"'. $_POST['otro'].'"';
				

								}
								
								?>
								></td>
									    </tr>
									   		<td colspan="2"><input id="txt-num-tarjeta" name="txt-num-tarjeta" placeholder="Ingrese el numero de la tarjeta de credito" type="text" class="form-control"><br>
									    	</td>
									    	<tr>
									    		<td colspan="2"><input id="txt-codigo" name="txt-codigo" placeholder="Ingrese su numero de identidad" type="text" class="form-control"><br>
									    	</td>
									    	</tr>
									    	
									    	<tr>
									    		<td colspan="2"><input id="date-fecha" name="date-fecha" type="date" class="form-control"><br>
									    	</td>
									    	</tr>
									    	
									    <tr>
									        <td >
									            <center><input type=image src="../img/visa.png" height="30" id="btn-visa"></center>
									        </td>
									         <td >
									            <center><input type=image src="../img/mastercard.png" height="30" id="btn-mastercard"></center>
									        </td>
									    </tr>
						     </table>
						     </form>
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



	</body>
</html>