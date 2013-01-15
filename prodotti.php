<?php
  // includo la classa Prodotto ProdottoScontato ProdottoLocale ProdottoTipico
	include('classi/Prodotto.php');
	include('classi/ProdottoScontato.php');
	include('classi/ProdottoLocale.php');
	include('classi/ProdottoTipico.php');
	// creo l'oggetto istanzio la classe
// oggetto ProdottoTipico
	$nocisorrento = new ProdottoTipico();
	$nocisorrento->regione = "Sicilia";
    $nocisorrento->descrizione= "Noci di Sorrento";
    $nocisorrento->prezzo_unitario = 10.67;
    $nocisorrento->id = 12456;
	//$luca->nome = "Luca"; variabile privata
	 
	//stampa l'oggetto tavolo scavolini
	printf("Il prodotto %s id %d ha un prezzo di %f e proviene dalla regione %s <br/>", $nocisorrento->descrizione, $nocisorrento->id, $nocisorrento->prezzo_unitario, $nocisorrento->regione );
	
	

?>
