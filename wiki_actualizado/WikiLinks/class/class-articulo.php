<?php

	class Articulo{

		private $nombreArticulo;
		private $contenidoArticulo;
		private $usuario;
		private $fechaPublicacion;
		private $comentarios;
		private $historial;
		private $tipoArticulo;
		private $tipoProteccion;

		public function __construct($nombreArticulo,
					$contenidoArticulo,
					$usuario,
					$fechaPublicacion,
					$comentarios,
					$historial,
					$tipoArticulo,
					$tipoProteccion){
			$this->nombreArticulo = $nombreArticulo;
			$this->contenidoArticulo = $contenidoArticulo;
			$this->usuario = $usuario;
			$this->fechaPublicacion = $fechaPublicacion;
			$this->comentarios = $comentarios;
			$this->historial = $historial;
			$this->tipoArticulo = $tipoArticulo;
			$this->tipoProteccion = $tipoProteccion;
		}
		public function getNombreArticulo(){
			return $this->nombreArticulo;
		}
		public function setNombreArticulo($nombreArticulo){
			$this->nombre = $nombreArticulo;
		}
		public function getContenidoArticulo(){
			return $this->contenidoArticulo;
		}
		public function setContenidoArticulo($contenidoArticulo){
			$this->contenidoArticulo = $contenidoArticulo;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getFechaPublicacion(){
			return $this->fechaPublicacion;
		}
		public function setFechaPublicacion($fechaPublicacion){
			$this->fechaPublicacion = $fechaPublicacion;
		}
		public function getComentarios(){
			return $this->comentarios;
		}
		public function setComentarios($comentarios){
			$this->comentarios = $comentarios;
		}
		public function getHistorial(){
			return $this->historial;
		}
		public function setHistorial($historial){
			$this->historial = $historial;
		}
		public function getTipoArticulo(){
			return $this->tipoArticulo;
		}
		public function setTipoArticulo($categoria){
			$this->tipoArticulo = $tipoArticulo;
		}
		public function getTipoProteccion(){
			return $this->tipoProteccion;
		}
		public function setTipoProteccion($tipoProteccion){
			$this->tipoArticulo = $tipoProteccion;
		}
		public function toString(){
			return "Nombre: " . $this->nombreArticulo . 
				" Contenido articulo: " . $this->contenidoArticulo . 
				" Usuario: " . $this->usuario . 
				" FechaPublicacion: " . $this->fechaPublicacion . 
				" Comentarios: " . $this->comentarios . 
				" Historial: " . $this->historial . 
				" Categoria: " . $this->categoria;
		}
	

		public function guardarRegistro($conexion){
			$sql = sprintf(
					"INSERT INTO tbl_articulos(
						CODIGO_TIPO_PROTECCION,
						CODIGO_TIPO_ARTICULO, 
						NOMBRE_ARTICULO, 
						CONTENIDO_ARTICULO
					) VALUES (
						'%s','%s','%s','%s'
					)",
					$conexion->getEnlace()->real_escape_string(stripslashes( $this->tipoProteccion)),
					$conexion->getEnlace()->real_escape_string(stripslashes( $this->tipoArticulo)),
					$conexion->getEnlace()->real_escape_string(stripslashes( $this->nombreArticulo)),
					$conexion->getEnlace()->real_escape_string(stripslashes( $this->contenidoArticulo))
			);

			$resultadoInsert = $conexion->ejecutarInstruccion($sql);
			$resultado=array();
			if ($resultadoInsert === TRUE) {
				$resultado["codigo"]=1;
				$resultado["mensaje"]="Exito, el  registro fue almacenado";
			} else {
				$resultado["codigo"]=0;
				$resultado["mensaje"]="Error: " . $sql . "<br>" . $conexion->getEnlace()->error;
			}
			echo json_encode($resultado);
		}
	}		
?>