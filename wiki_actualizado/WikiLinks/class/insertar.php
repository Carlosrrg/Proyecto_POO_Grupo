
<?php
	include('class_conexion.php');

	if (isset($_POST['nombrearticulo'])) {
 		echo $_POST['nombrearticulo'];
 	}
 	if (isset($_POST['nombrearticulo'])) {
 		echo $_POST['nombrearticulo'];
 	}


	if (isset($_POST['nombrearticulo']) and !empty($_POST['nombrearticulo']) 
		and isset($_POST['areaeditor']) and !empty($_POST['areaeditor'])) {

		$con=mysqli_connect($host,$user,"1")or die("Problemas al conectar");
		mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

		mysqli_query($con, "INSERT INTO tbl_articulos (
			CODIGO_TIPO_PROTECCION,NOMBRE_ARTICULO, CONTENIDO_ARTICULO, TITULO)
		VALUES (2,'$_POST[nombrearticulo]', '$_POST[areaeditor]', '$_POST[nombrearticulo]')");
		echo "datos insertados";
	}else {
	  echo "Problemas al insertar datos";
	}
 	
 

 ?>