<?php
	if (file_exists('moneyDrop.xml')) {
    $xml = simplexml_load_file('moneyDrop.xml');
    
    foreach ($xml->liasses->montant as $liasse) {
		echo "<option value=".$liasse.">".$liasse."</option>";
		}
	} 
	else {
	    exit('Echec lors de l\'ouverture du fichier test.xml.');
	}
?>