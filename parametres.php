<?php
	if (file_exists('moneyDrop.xml')) {
    $xml = simplexml_load_file('moneyDrop.xml');
    //print_r($xml);
    
    foreach ($xml->miseDeDepart->montant as $mise) {
		echo $mise . "<br>";
		}
	} 
	else {
	    exit('Echec lors de l\'ouverture du fichier test.xml.');
	}
?>