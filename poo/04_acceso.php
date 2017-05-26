<?php 
	class Persona {

		public $documento;
		private $nombre;
		private $edad;

		public function __construct($documento, $nombre, $edad) {
			$this->documento = $documento;
			$this->nombre    = $nombre;
			$this->edad      = $edad;

			echo "nombre: ".$this->nombre."<br>";
			echo "edad: ".$this->edad." años"."<br>";
			echo "documento: ".$this->documento;
		}

		private function getDocumento(){
			return $this->documento;
		}
		private function getNombre(){
			return $this->nombre;
		}
	    private function getEdad(){
			return $this->edad;
		}
	}

	$per = new Persona(75000001, 'Chepe',86);

	//echo $per->documento;  // CORRECTO
	//echo $per->nobre;  // INCORRECTO

 ?>