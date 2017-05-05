	<?php
	session_start(); 
	switch ($_GET["accion"]) {
		case '1': 
			
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario.php");
			$conexion = new Conexion();
			$respuesta = Usuario::verificarUsuario($conexion,$_POST["txt-nombre"],$_POST["txt-contrasena"]);
			$_SESSION["codigo_usuario"] = $respuesta["codigo_usuario"];
			$_SESSION["nombre_usuario"] = $respuesta["nombre_usuario"];
			$_SESSION["codigo_tipo_usuario"] = $respuesta["codigo_tipo_usuario"];
			echo json_encode($resultado);

			break;
		case '2':
		//crea un usuario y llama al metodo guardar regristo que recie una conexion como para mettro
			include_once("../class/class_conexion.php");
			include_once("../class/class_usuario");
			 
			$conexion =new Conexion();
			$conexion->estrablecerConexion();
			$usuario=new Usuario($_POST["txt-usuario"], $_POST["contrasena"],$_POST["correo"]);
			$resultado=$usuario->guardarRegistro($conexion);
			echo json_encode($resultado);
		
			

	default:
			# code...
			break;
	}
	
?>