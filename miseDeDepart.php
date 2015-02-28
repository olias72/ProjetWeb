<?php
	if (file_exists('moneyDrop.xml')) {
    $xml = simplexml_load_file('moneyDrop.xml');
    
    foreach ($xml->miseDeDepart->montant as $mise) {
		echo "<option value=".$mise.">".$mise."</option>";
		}
	} 
	else {
	    exit('Echec lors de l\'ouverture du fichier test.xml.');
	}
?>