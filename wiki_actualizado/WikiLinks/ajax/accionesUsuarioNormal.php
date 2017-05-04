<?php
	switch ($_GET["accion"]) {
		case '1':
		if (isset($_FILES["file"]))
{
    $file = $_FILES["file"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];
    $carpeta = "../img/";
    
    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif')
    {
      echo "Error, el archivo no es una imagen"; 
    }
   
    else
    {
        $src = $carpeta.$nombre;
        move_uploaded_file($ruta_provisional, $src);
        
    }
}else{
    echo "No hay archivo";
}

				//Pendiente lo de subir imagen para meterla en la base 



			
			break;
		case '2':

			include_once("../class/class_conexion.php");
				
					$conexion = new Conexion();
				$conexion->establecerConexion();// Imagen base64 enviada desde javascript en el formulario
// En este caso, con PHP plano podriamos obtenerla usando :
 $baseFromJavascript = $_POST['base64'];
 $codigoUsario=$_POST['codigo_Usuario'];
//$baseFromJavascript = "data:image/png;base64,BBBFBfj42Pj4....";
//echo $baseFromJavascript;
// Nuestro base64 contiene un esquema Data URI (data:image/png;base64,)
// que necesitamos remover para poder guardar nuestra imagen
// Usa explode para dividir la cadena de texto en la , (coma)

$baseFromJavascript=str_replace(' ', '+', $baseFromJavascript);




$base_to_php = explode(',', $baseFromJavascript);
// El segundo item del array base_to_php contiene la información que necesitamos (base64 plano)
// y usar base64_decode para obtener la información binaria de la imagen
$data = base64_decode($base_to_php[1]);// BBBFBfj42Pj4....

// Proporciona una locación a la nueva imagen (con el nombre y formato especifico)
$filepath = "../img/".$codigoUsario.".png"; // or image.jpg

// Finalmente guarda la imágen en el directorio especificado y con la informacion dada
file_put_contents($filepath, $data);

			
			
				$conexion->ejecutarInstruccion("UPDATE tbl_usuarios Set Urlperfil='../img/".$codigoUsario.".png'   Where codigo_usuario=$codigoUsario ");


				$conexion->cerrarConexion();

			break;
		case '3':
				include_once("../class/class_conexion.php");
				$codigoUsario=$_POST['codigo_Usuario'];
					$conexion = new Conexion();
					$conexion->establecerConexion();
					$conexion->ejecutarInstruccion("DELETE FROM tbl_usuarios WHERE CODIGO_USUARIO =$codigoUsario ");


					$conexion->cerrarConexion();


			
			break;
		case '4':
				include_once("../class/class_conexion.php");
				
					$conexion = new Conexion();
					$conexion->establecerConexion();

					$nombre=$_POST['txt-nombre-moderador'];
					$correo=$_POST['txt-correo-moderador'];
					$date=$_POST['txt-date-moderador'];
					$usuario=$_POST['txt-usuario-moderador'];
					$contrasena=$_POST['txt-contrasena-moderador'];
					$especialidad=$_POST['txt-especialidad-moderador'];
					$categoria=$_POST['slc-categoria-moderador'];
					$codigo=$_POST['codigo_Usuario'];







					$conexion->ejecutarInstruccion("UPDATE tbl_usuarios  Set NOMBRE='$nombre'     WHERE CODIGO_USUARIO =$codigo ");
					$conexion->ejecutarInstruccion("UPDATE tbl_usuarios  Set CORREO_ELECTRONICO='$correo'    WHERE CODIGO_USUARIO =$codigo ");
					$conexion->ejecutarInstruccion("UPDATE tbl_usuarios  Set FECHA_NACIMIENTO='$date'    WHERE CODIGO_USUARIO =$codigo ");
			        $conexion->ejecutarInstruccion("UPDATE tbl_usuarios  Set USERNAME='$usuario'    WHERE CODIGO_USUARIO =$codigo ");
					$conexion->ejecutarInstruccion("UPDATE tbl_usuarios  Set CONTRASEÑA='$contrasena'    WHERE CODIGO_USUARIO =$codigo ");
					












					$conexion->cerrarConexion();

				
			break;
			
		default:
			# code...
			break;
	}
	
?>