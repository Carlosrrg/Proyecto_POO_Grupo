
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

		$con=mysqli_connect($host,$user,"")or die("Problemas al conectar");
		mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

		mysqli_query($con, "INSERT INTO tbl_articulos (NOMBRE_ARTICULO, CONTENIDO_ARTICULO, TITULO)
		VALUES ('$_POST[nombrearticulo]', '$_POST[areaeditor]', '$_POST[nombrearticulo]')");
		echo "datos insertados";
	}else {
	  echo "Problemas al insertar datos";
	}
 	
 

 ?>