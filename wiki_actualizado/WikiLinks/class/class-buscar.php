<?php

	class Buscador{

		private $buscador;
		
		public function __construct($buscador){
			$this->buscador = $buscador;
		}
		public function getBuscador(){
			return $this->buscador;
		}
		public function setBuscador($buscador){
			$this->buscador = $buscador;
		}
		
		public function toString(){
			return "buscador: " . $this->buscador;
		}

		public function buscar($conexion){

            $sql = sprintf("SELECT CONTENIDO, NOMBRE_ARTICULO FROM tbl_articulos WHERE TITULO = '%s'",
            		stripslashes($this->buscador)
            	);

           $resultado =  $conexion->ejecutarInstruccion($sql);

           if ($resultado) {
           	 $fila = $conexion->obtenerFila($resultado);
           	 return $fila;
           }else{
           	
           	return;
           }       

		}
	}
?>