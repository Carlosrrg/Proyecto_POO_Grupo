<?php
	switch ($_GET["accion"]) {

		case '1':
	
					include_once("../class/class_conexion.php");
				
					$conexion = new Conexion();
					$conexion->establecerConexion();
					$resultadonotificaciones=$conexion->ejecutarInstruccion(" SELECT CODIGO_REPORTE_ERROR, CODIGO_USER_REPORTA, CODIGO_ARTICULO, NOMBRE_ERROR, DESCRIPCION , FECHA FROM tbl_reporte_errores  ");
						?>

							<form id="val-admin" action="">
						    <table class="table table-hover">
						    <tr>
							  <th scope="col">N. Notificacion</th>
							  <th scope="col">Nombre del Moderador</th>
							  <th scope="col">Solicitud</th>
							  <th scope="col">Descripcion</th>
						      <th scope="col">Accion</th>
						   </tr> 

						<?php 
						while($fila = $conexion->obtenerFila($resultadonotificaciones)){
									
								$codigo=$fila['CODIGO_USER_REPORTA'];
								$resultanombre=$conexion->ejecutarInstruccion(" SELECT NOMBRE  FROM tbl_usuarios where CODIGO_USUARIO=$codigo ");
								$fila2 = $conexion->obtenerFila($resultanombre);

						 ?>

						 	<tr>
											    <td><?php echo $fila['CODIGO_REPORTE_ERROR']; ?></td>
											    <td><a href="#"><?php echo $fila2['NOMBRE']; ?></a></td>
											    <td><?php echo $fila['NOMBRE_ERROR']; ?></td>
											    <td><?php echo $fila['DESCRIPCION']; ?></td>
											    <td>
											    	<button class="btn btn-danger" onClick="borrarArticulo(<?php echo $fila['CODIGO_ARTICULO']; ?>);">Aprobar cancelacion de Articulo</button>&nbsp;
											    	<br><br><!--Poner saltos de linea para evitar botones pegados-->
											    	
											    </td>
											</tr>




						 	<?php 
						 }





						 	?>

						 	</table>
							</form>

							<h2>Notificaciones de moderadores usuarios reportados pendientes </h2>
							<form id="val-admin" action="">
						    <table class="table table-hover">
						    <tr>
							  <th scope="col">N. Notificacion</th>
							  <th scope="col">Nombre del reportado</th>
							  <th scope="col">Tipo de falta</th>
							  <th scope="col">Cantidad de faltas</th>
						      <th scope="col">Accion</th>
						   </tr> 

						<?php 


								$resultanombre1=$conexion->ejecutarInstruccion(" SELECT CODIGO_USUARIO, CODIGO_TIPO_FALTA, CODIGO_SANCION  FROM tbl_historial_faltas ");
								

								while($fila3 = $conexion->obtenerFila($resultanombre1)){
										
										$codigo=$fila3['CODIGO_USUARIO'];
										$resultanombre4=$conexion->ejecutarInstruccion(" SELECT NOMBRE, NUMERO_FALTAS  FROM tbl_usuarios where CODIGO_USUARIO=$codigo ");
										$fila8 = $conexion->obtenerFila($resultanombre4);
								
							

						 ?>

						 	<tr>
											    <td><?php echo $fila3['CODIGO_USUARIO']; ?></td>
											    <td><a href="#"><?php echo $fila8['NOMBRE']; ?></a></td>
											    <td><?php echo $fila3['CODIGO_TIPO_FALTA']; ?></td>
											    <td><?php echo $fila8['NUMERO_FALTAS']; ?></td>
											    <td>
											    	<button class="btn btn-danger" onClick="borrarUsuario(<?php echo $fila3['CODIGO_USUARIO']; ?>);">Cancelar cuenta</button>&nbsp;
											    	<br><br><!--Poner saltos de linea para evitar botones pegados-->
											    	
											    </td>
											</tr>




						 	<?php 
						 }





						 	?>

						 	</table>
							</form>










						 <?php

					$conexion->cerrarConexion();

			
			break;
		case '2':

					include_once("../class/class_conexion.php");
					$codigoUsario=$_POST['codigo_Usuario'];
					$conexion = new Conexion();
					$conexion->establecerConexion();
					$conexion->ejecutarInstruccion("DELETE FROM tbl_reporte_errores WHERE CODIGO_USER_REPORTA =$codigoUsario ");
					$conexion->ejecutarInstruccion("DELETE FROM tbl_historial_faltas WHERE CODIGO_USUARIO =$codigoUsario ");
					$conexion->ejecutarInstruccion("DELETE FROM tbl_notificaciones WHERE CODIGO_USUARIO_EMISOR =$codigoUsario ");
					$conexion->ejecutarInstruccion("DELETE FROM tbl_usuarios WHERE CODIGO_USUARIO =$codigoUsario ");
					


					$conexion->cerrarConexion();



			

			break;
		case '3':
					include_once("../class/class_conexion.php");
					$codigoUsario=$_POST['codigo_Articulo'];
					$conexion = new Conexion();
					$conexion->establecerConexion();
					
					$conexion->ejecutarInstruccion("DELETE FROM tbl_articulos WHERE CODIGO_ARTICULO =$codigoUsario ");


					$conexion->cerrarConexion();


			
			break;
		case '4':
				

				
			break;
			
		default:
			# code...
			break;
	}
	
?>