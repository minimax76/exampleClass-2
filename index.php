<?php
  // includo la classe Operaio
	include('classi/Operaio.php');
   // oggetto Alessandro
	$alessandro = new Operaio();
	$alessandro->nome = "Alessandro";
	$alessandro->cognome = "Rossi";
	$alessandro->eta = 45;
	$alessandro->mansione = "Operaio";
	$alessandro->compenso = 1000;
	$alessandro->setMatricola("12345");	
	$matricola = $alessandro->matricola();
	printf("Mi chiamo %s ho %d anni sono un %s e prendo un salario di %d euro e il mio numero di matricola e %s<br/>", $alessandro->nome, $alessandro->cognome, $alessandro->eta, $alessandro->mansione, $alessandro->compenso, $matricola);
?>
