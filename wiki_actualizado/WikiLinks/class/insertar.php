<?php
	include_once(class_conexion.php);
	if(isset($_POST['nombre-articulo']) && !empty($_POST['nombre-articulo']) && isset($_POST['area-editor']) && !empty($_POST['area-editor']) ){

		$con=mysql_connect($host, $user, $area-editor)or die("Problemas al conectar");
		mysql_select_db($db,$con)or die("Problemas al conectar la bd");
	}

?>