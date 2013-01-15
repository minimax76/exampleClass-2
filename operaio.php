<?php
  include('Impiegato.php');
	class Operaio extends Impiegato
	{
		// Proprietà come variabili con attributo pubblico e privato
			protected $turni=TRUE;
			protected $specializzazione = "Tornitore";
			private $matricola;

  		// Metodi come function
  		// Metodi come function
		//	per settare la proprita
			public function setMatricola($a){
				$this->matricola = $a;
			}
    	//	per settare la proprita

			public function matricola(){
				return $this->matricola;
			}
	}
?>
