<?php

	class Donacion{

		private $monto;
		private $fecha;
		private $codigo;



		public function __construct($monto,
					$fecha, 
					$codigo
					){
			$this->monto = $monto;
			$this->fecha = $fecha;
			$this->codigo = $codigo;
		}
		public function getMonto(){
			return $this->monto;
		}
		public function setMonto($monto){
			$this->monto = $monto;
		}
		public function getFecha(){
			return $this->fecha;
		}
		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function getCodigo(){
			return $this->codigo;
		}
		public function setCodigo($codigo){
			$this->codigo = $codigo;
		}
		
		public function toString(){
			return "monto: " . $this->monto . 
				" fecha: " . $this->fecha;
		}

		public function guardarDonacion($conexion){

            $sql = sprintf(
                "INSERT INTO donaciones (CODIGO_DONACION, CODIGO_USUARIO, MONTO, FECHA)
                VALUES ('%s', null, '%s', '%s')",
                 		stripslashes($this->codigo),  
                        stripslashes($this->monto),
                        stripslashes($this->fecha)
                       

                );
            //echo $sql;
            $resultado = $conexion->ejecutarInstruccion($sql);
            if ($resultado)
                echo "Donacion recibida";
            else
                echo "Error al procesar donacion";
        }
	}
?>