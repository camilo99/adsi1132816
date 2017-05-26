<?php 

	class evolucionar {
		public function evolucionarPokemon($nom, $evo){
			echo "<li>".$nom." Ha evolucionado a un ".$evo."</li>";
		}
	}
	class pokemon {
		private $nombre;
		private $evolucion;
		private $colaboracion;

		public function __construct($nom, $evo){
			$this->nombre = $nom;
			$this->evolucion = $evo;

			$this->colaboracion = new evolucionar();
		}

		public function evoPokemon() {
			$this->colaboracion->evolucionarPokemon($this->nombre, $this->evolucion);
		}
	}

	$pk1 = new pokemon('pichu', 'pikachu');
	$pk1->evoPokemon();

	$pk2 = new pokemon('pikachu', 'raichu');
	$pk2->evoPokemon();

 ?>