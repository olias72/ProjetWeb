<?php
	if (file_exists('moneyDrop.xml')) {
    $xml = simplexml_load_file('moneyDrop.xml');
    
    foreach ($xml->modeDeJeu->mode as $mode) {
		echo "<option value=".$mode.">".$mode."</option>";
		}
	} 
	else {
	    exit('Echec lors de l\'ouverture du fichier test.xml.');
	}
?>