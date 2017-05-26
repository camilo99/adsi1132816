<?php 
	/**
	* 
	*/
	class familia 
	{	
		protected $padre;
		protected $hijo;
		
		
		function __construct($padre, $hijo)
		{
		 $this->padre = $padre;
		 $this->hijo  = $hijo;

		}
	}


	/**
	* 
	*/
	class Otra extends familia
	{
		
		   public function getfamilia()
		  {
		  	# code...
			parent::__construct('sofia', 'pedro');
			echo "<li> El padre es".$this->padre."</li>";

			echo "<li> El hijo es".$this->hijo."</li>";
		

		  }
		  
		  	
		  
		
		
	}
	$mostrar = new Otra('alberto', 'juan');
	$mostrar->getfamilia();
	


 ?>