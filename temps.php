<?php
	if (file_exists('moneyDrop.xml')) {
    $xml = simplexml_load_file('moneyDrop.xml');
    
    foreach ($xml->tempsDeReflexion->duree as $tps) {
		echo "<option value=".$tps.">".$tps."</option>";
		}
	} 
	else {
	    exit('Echec lors de l\'ouverture du fichier test.xml.');
	}
?>