<?php
	switch ($_GET["accion"]) {
		case '1':

			include_once("../class/class_conexion.php");
				
					$conexion = new Conexion();
					$conexion->establecerConexion();
					$resultado=$conexion->ejecutarInstruccion("SELECT  DISTINCT   CODIGO_ARTICULO  FROM tbl_reporte_errores ");


					?>
						<div id="div-lista-aplicaciones"></div>
									<form action="">
						           		<table class="table table-hover" style="width: 70%">
											<tr>
											  <th scope="col">Articulo</th>
											  <th scope="col">Tipo de articulo</th>
											  <th scope="col">N. Reportes</th>
											  <th scope="col">Accion</th>
											</tr>
					<?php

					while($fila=$conexion->obtenerFila($resultado)){

							$W=$fila['CODIGO_ARTICULO'];
							$num=$conexion->ejecutarInstruccion(" SELECT CODIGO_ARTICULO   FROM tbl_reporte_errores WHERE CODIGO_ARTICULO=$W ");
							$num2=$conexion->cantidadRegistros($num);
							$resultado2=$conexion->ejecutarInstruccion("SELECT  NOMBRE_ARTICULO, CODIGO_TIPO_ARTICULO FROM tbl_articulos a where CODIGO_ARTICULO=$W  
							

								");
								$fila2=$conexion->obtenerFila($resultado2);
						?>




						<tr>
												<td><a href="../php/listaReportesPorUsuarios.php?codigo=<?php echo $fila['CODIGO_ARTICULO'];?>"><?php echo $fila2['NOMBRE_ARTICULO']; ?></a></td>
											    <td><a href="../php/listaReportesPorUsuarios.php?codigo=<?php echo $fila['CODIGO_ARTICULO'];?>"><?php echo $fila2['CODIGO_TIPO_ARTICULO'];  ?></a></td>
											    <td><a href="../php/listaReportesPorUsuarios.php?codigo=<?php echo $fila['CODIGO_ARTICULO'];?>"><?php echo $num2; ?></a></td>
											  <td>
											<button class="btn btn-warning" id="btn-cancelar" name="btn-cancelar" onClick="cancelarcuenta(<?php echo $fila2['CODIGO_TIPO_ARTICULO'];  ?>);">Solicitar cancelar cuenta de usuario</button>
										</td>
								</tr>

					<?php
					}
					?>

									</table>
									<a href="perfilUsuarioModerador.php"> Perfil</a>
							      	</form>

					<?php



		
			break;


				case '2':

				include_once("../class/class_conexion.php");
					$codigo=$_POST['codigo'];
						$conexion = new Conexion();
					$conexion->establecerConexion();
					$resultado=$conexion->ejecutarInstruccion(" INSERT  INTO tbl_historial_faltas (CODIGO_USUARIO ,CODIGO_TIPO_FALTA ,
CODIGO_SANCION) VALUES ($codigo,2,2) ");





					break;

			default:
			# code...
			break;
	}
	
?>