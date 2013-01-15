<?php
  include('Dipendente.php');
	class Impiegato extends Dipendente
	{
		// Proprietà come variabili con attributo pubblico e privato
			protected $turni=FALSE;
			protected $specializzazione="Perito Informatico";
			public $compenso;
  		// Metodi come function
	}
?>
