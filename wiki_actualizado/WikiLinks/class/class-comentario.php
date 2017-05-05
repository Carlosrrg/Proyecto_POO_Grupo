<?php
	class Comentario{
		private $usuario;
		private $descripcionComentario;
		private $fechaComentario;
		public function __construct(
					$usuario,
					$descripcionComentario,
					$fechaComentario){
			$this->usuario = $usuario;
			$this->descripcionComentario = $descripcionComentario;
			$this->fechaComentario = $fechaComentario;
		}
		public function getUsuario(){
			return $this->usuario;
		}
		public function setUsuario($usuario){
			$this->usuario = $usuario;
		}
		public function getDescripcionComentario(){
			return $this->descripcionComentario;
		}
		public function setDescripcionComentario($descripcionComentario){
			$this->descripcionComentario = $descripcionComentario;
		}
		public function getFechaComentario(){
			return $this->fechaComentario;
		}
		public function setFechaComentario($fechaComentario){
			$this->fechaComentario = $fechaComentario;
		}
		public function _toString(){
			return 
				" Usuario: " . $this->usuario . 
				" DescripcionComentario: " . $this->descripcionComentario . 
				" FechaComentario: " . $this->fechaComentario;
		}
	}
?>