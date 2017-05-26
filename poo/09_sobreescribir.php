<?php 

	/**
	* 
	*/
	class vehiculo 
	{
		protected $marca;
		protected $referencia;

		function __construct($marca, $referencia)
		{
			$this->marca = $marca;
			$this->referencia = $referencia;
		}

		public function getVehiculo() {
			echo "<li> <strong>referencia: </strong> ".$this->referencia." </li>";
		}
	}

	/**
	* 
	*/
	class Mini extends vehiculo
	{
			 public function getVehiculo()
			{
				echo "<li> <strong>Marca: </strong> ".$this->marca." </li>";
				parent::getVehiculo();
			}		
	}

	$vh = new Mini('Mini', 'cooper s');
	$vh->getVehiculo();

 ?>