<?php 
	class Vehiculo {
		private $tipo;
		private $marca;
		private $referencia;

		public function __construct($marca, $referencia, $tipo = 'Sedan'){
			$this->tipo = $tipo;
			$this->marca = $marca;
			$this->referencia = $referencia;
		}

		 public function getVehiculo()
		{
			echo "Tipo: ".$this->tipo."</br>";
			echo "Marca: ".$this->marca."</br>";
			echo "referencia: ".$this->referencia->getReferencia()."<hr>";
		}
	}

	class volkswagen {
		private $referencia;
		public function __construct($ref){
		$this->referencia = $ref;
		}
		public function getReferencia(){
			if($this->referencia == 1) return 'gol';
			if($this->referencia == 2) return 'polo';
			if($this->referencia == 3) return 'jetta';
		}
	}

	$vk1 = new volkswagen(1);
	$vh1 = new Vehiculo('volkswagen', $vk1, 'coupe/sedan');
	$vh1->getVehiculo();

	$vk2 = new volkswagen(2);
	$vh2 = new Vehiculo('volkswagen', $vk2, 'coupe');
	$vh2->getVehiculo();


	$vk3 = new volkswagen(3);
	$vh3 = new Vehiculo('volkswagen', $vk1);
	$vh3->getVehiculo();



 ?>