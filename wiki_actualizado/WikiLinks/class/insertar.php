
<?php
	include('class_conexion.php');
	if (isset($_POST['nombre_articulo']) and !empty($_POST['nombre_articulo']) 
		and isset($_POST['area_editor']) and !empty($_POST['area_editor'])) {

		$con=mysqli_connect($host,$user,'')or die("Problemas al conectar");
		mysqli_select_db($con, $db)or die("Problemas al conectar la bd");

		mysqli_query($con, "INSERT INTO tbl_articulos (NOMBRE_ARTICULO, CONTENIDO_ARTICULO, TITULO)
		VALUES ('$_POST[nombre_articulo]', '$_POST[area_editor]', '$_POST[nombre_articulo]')");
		echo "datos insertados";
	}else {
	  echo "Problemas al insertar datos";
	}
 	
 	if (isset($_POST['nombre_articulo'])) {
 		echo $_POST['nombre_articulo'];
 	}
 	if (isset($_POST['nombre_articulo'])) {
 		echo $_POST['nombre_articulo'];
 	}

 ?>