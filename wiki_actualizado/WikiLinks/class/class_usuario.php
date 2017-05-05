<?php

	class Usuario{

		private $codigoUsuario;
		private $nombreUsuario;
		private $correo;
		private $contrasena;
		private $codigoTipoUsuario;

		public function __construct($codigoUsuario,
					$nombreUsuario,
					$correo,
					$contrasena,
					$codigoTipoUsuario){
			$this->codigoUsuario = $codigoUsuario;
			$this->nombreUsuario = $nombreUsuario;
			$this->correo = $correo;
			$this->contrasena = $contrasena;
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function getCodigoUsuario(){
			return $this->codigoUsuario;
		}
		public function setCodigoUsuario($codigoUsuario){
			$this->codigoUsuario = $codigoUsuario;
		}
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
		public function getCorreo(){
			return $this->correo;
		}
		public function setCorreo($correo){
			$this->correo = $correo;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getCodigoTipoUsuario(){
			return $this->codigoTipoUsuario;
		}
		public function setCodigoTipoUsuario($codigoTipoUsuario){
			$this->codigoTipoUsuario = $codigoTipoUsuario;
		}
		public function toString(){
			return "CodigoUsuario: " . $this->codigoUsuario . 
				" NombreUsuario: " . $this->nombreUsuario . 
				" Correo: " . $this->correo . 
				" Contrasena: " . $this->contrasena . 
				" CodigoTipoUsuario: " . $this->codigoTipoUsuario;
		}

		public static function verificarUsuario($conexion, $nombre,$contrasena){
				$sql=sprintf("SELECT CODIGO_USUARIO, NOMBRE, CODIGO_TIPO_USUARIO,  FROM tbl_usuarios WHERE NOMBRE='%s' AND CONTRASENA='%s'",stripslashes($nombre),stripslashes($contrasena));
				$resultado = $conexion->ejecutarInstruccion($sql);
				$respuesta = array();
				if($conexion->cantidadRegistros($resultado) >0){
					$fila = $conexion->obtenerFila($resultado);
					$respuesta["codigo_resultado"] = 1;
					$respuesta["resultado"] = "Usuario Existe";
					$respuesta["codigo_usuario"] = $fila["CODIGO_USUARIO"];
					$respuesta["nombre_usuario"] = $fila["NOMBRE"];
					$respuesta["codigo_tipo_usuario"] = $fila["CODIGO_TIPO_USUARIO"];
				}
				else {
					$respuesta["codigo_resultado"] = 0;
					$respuesta["resultado"] = "Usuario no Existe";
				}
				return json_encode($respuesta);
		}
		//esta clase se guarda los registros del usuario 
		public function guardarRegistro($conexion){
			$sql=sprintf("INSERT INTO tbl_usuarios(CODIGO_USUARIO, CODIGO_GENERO, CODIGO_LUGAR_RESIDENCIA, CODIGO_LUGAR_NACIMIENTO, CODIGO_TIPO_USUARIO, CODIGO_ARTICULO_USUARIO, CODIGO_HUSO_HORARIO, USERNAME, NOMBRE, APELLIDO, CORREO_ELECTRONICO, CONTRASENA, FECHA_NACIMIENTO, DIRECCION_IP, NUMERO_FALTAS, URLPERFIL) VALUES (1,1,1,1,2,2,2,'%s,'%s','%s','%s','%s',NULL,'192.168.0.1',12,1)",$this->nombreUsuario,$this->nombreUsuario,$this->nombreUsuario,$this->correo,$this->contrasena,);

			$resultadoInser=$conexion->ejecutarInstruccion($sql);
			$resultado=array();
			if ($resultadoInser==TRUE) {
				$resultado["codigo"]=1;
				$resultado["mensaje"]="Exito el registro fue almacenado";

			}else{
				$resultado["codigo"]=0;
				$resultado["mensaje"]="Error: " . $sql . "<br>" . $conexion->getEnlace()->error;

			}
			return $resultado

	}
?>