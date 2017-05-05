<?php

	class Historial{

		private $fecha;
		private $contenido;

		public function __construct(
					$fecha,
					$contenido){
			$this->fecha = $fecha;
			$this->contenido = $contenido;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}
		public function getContenido(){
			return $this->contenido;
		}
		public function setContenido($contenido){
			$this->contenido = $contenido;
		}
		public function _toString(){
			return "Fecha: " . $this->fecha . 
				" Contenido: " . $this->contenido;
		}
	}
?>