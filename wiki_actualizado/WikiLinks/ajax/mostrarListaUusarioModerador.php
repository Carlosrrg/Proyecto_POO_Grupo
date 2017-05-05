<?php
include_once("../class/class_conexion.php");
	$conexion=new Conexion();
	$conexion->establecerConexion();

	switch ($_GET["accion"]) {
		case '1':
			//consulta a la tbtl_usuarios
			$sql=" SELECT 	a.CODIGO_USUARIO, 
						 	a.CODIGO_TIPO_USUARIO, 
							a.CODIGO_ARTICULO_USUARIO,
				            a.NOMBRE,
							a.USERNAME,
				            b.NOMBRE_ARTICULO NOMBRE_articulo
							FROM tbl_usuarios a
							LEFT JOIN tbl_articulos b
							ON (a.CODIGO_ARTICULO_USUARIO=b.CODIGO_ARTICULO)";
			$arregloUsuarios=$conexion->ejecutarInstruccion($sql);
?>		
			<table class="table table-hover">
				<tr>
				    <th scope="col">Nombre del Articulo</th>
				    <th scope="col">Usuario</th>
				    <th></th>
				</tr> 
           		<?php
           			while ($linea=$conexion->obtenerFila($arregloUsuarios)) {
           				if ($linea["CODIGO_TIPO_USUARIO"]==2) {
           		?>			
           					<tr>
		           				<td><?php echo $linea["NOMBRE_articulo"]?></td>
		           				<td><?php echo $linea["USERNAME"]?></td>
		           				<td>
			           				<button class="btn btn-success" id="btn-aprobar" onclick="codigoUsuario('<?php echo $linea["CODIGO_USUARIO"]?>')">Aprobar</button>&nbsp;
			           				<button class="btn btn-danger" id="btn-eliminar" onclick="codigoUsuario('<?php echo $linea["CODIGO_USUARIO"]?>')">Eliminar</button>&nbsp;
		           				</td>
           					</tr>
           		<?php					
           				}
           			}
           		?>
			</table>
<?php											
			break;
		case '2':
			$codigo=$_POST["codigo"];
			$sql=" SELECT 	a.CODIGO_USUARIO, 
						 	a.CODIGO_TIPO_USUARIO, 
							a.CODIGO_ARTICULO_USUARIO,
				            a.NOMBRE,
							a.USERNAME,
				            b.NOMBRE_ARTICULO NOMBRE_articulo
							FROM tbl_usuarios a
							LEFT JOIN tbl_articulos b
							ON (a.CODIGO_ARTICULO_USUARIO=b.CODIGO_ARTICULO)
							WHERE CODIGO_USUARIO IN($codigo)";
			$arregloUsuariosAprobados=$conexion->ejecutarInstruccion($sql);
			while ($linea=$conexion->obtenerFila()) {
				
			}
			break;	
		
		default:
			# code...
			break;
	}
?>
<?php
	$conexion->cerrarConexion();
?>