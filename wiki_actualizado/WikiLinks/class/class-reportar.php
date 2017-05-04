<?php

	class Reporte{

		private $claveFalta;
		private $nombre;
		private $linkArticulo;
		private $descripcion;



		public function __construct($claveFalta, $nombre,
					$linkArticulo, 
					$descripcion
					){
			$this->claveFalta = $claveFalta;
			$this->nombre = $nombre;
			$this->linkArticulo = $linkArticulo;
			$this->descripcion = $descripcion;
		}
		public function getClaveFalta(){
			return $this->claveFalta;
		}
		public function setClaveFalta($claveFalta){
			$this->claveFalta = $claveFalta;
		}

		public function getNombre(){
			return $this->nombre;
		}
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getLinkArticulo(){
			return $this->linkArticulo;
		}
		public function setLinkArticulo($linkArticulo){
			$this->linkArticulo = $linkArticulo;
		}

		public function getDescripcion(){
			return $this->Descripcion;
		}
		public function setDescripcion($descripcion){
			$this->descripcion = $descripcion;
		}

	public function guardarReporte($conexion){

            $sql = sprintf(
                "INSERT INTO tbl_tipo_faltas(CODIGO_TIPO_FALTA, NOMBRE_TIPO_FALTA, DESCRIPCION)
                VALUES ('%s', '%s', '%s')",
                 		stripslashes($this->claveFalta),  
                        stripslashes($this->linkArticulo),
                        stripslashes($this->descripcion)
                       

                );

            $numeroFaltas = sprintf("SELECT NUMERO_FALTAS FROM tbl_usuarios WHERE USERNAME = '%s'",
            		stripslashes($this->nombre)
            	);
          
            $numeroFaltas+=1;

            $sql2 = sprintf("UPDATE tbl_usuarios SET NUMERO_FALTAS='%s' WHERE USERNAME = '%s'",
            		stripslashes($numeroFaltas),
            		stripslashes($this->nombre)
            );

          
            $resultado = $conexion->ejecutarInstruccion($sql);
           	$resultado2 = $conexion->ejecutarInstruccion($sql2);

           	if($resultado&&$resultado2){
           		return  "Usuario no Reportado error en el nombre de usuario";
           		
           }

           
           return  "usuario Reportado";

}
       }
           
?>