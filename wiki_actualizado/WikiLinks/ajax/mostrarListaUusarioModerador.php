<?php
include_once("../class/class_conexion.php");
	$conexion=new Conexion();
	$conexion->establecerConexion();

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

	switch ($_GET["accion"]) {
		case '1':
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
           					echo "<tr>";
		           				echo '<td>'.$linea["NOMBRE_articulo"].'</td>';
		           				echo '<td>'.$linea["USERNAME"].'</td>';
		           				echo '<td>';
			           				echo "<button class='btn btn-success' id='btn-aprobar' onclick='codigoUsuario('".$linea["CODIGO_USUARIO"]."')'>Aprobar</button>&nbsp;";
			           				echo '<button class="btn btn-danger" id="btn-eliminar">Eliminar</button>&nbsp;';
		           				echo '</td>';
           					echo "</tr>";		
           				}
           			}
           		?>
			</table>
<?php											
			break;
		case '2':
			# code...
			break;	
		
		default:
			# code...
			break;
	}
?>
<?php
	$conexion->cerrarConexion();
?>