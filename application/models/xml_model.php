<?php 

Class Xml_model extends CI_Model {

	public $xml;

	function __construct() {
		parent::__construct();
		if (file_exists('assets/xml/moneyDrop.xml')) {
    		$this->xml = simplexml_load_file('assets/xml/moneyDrop.xml');
    	}
    	else {
		    exit('Echec lors de l\'ouverture du fichier moneyDrop.xml.');
		}
	}

	function loadXml_montantDep() {
	    $mdd = $this->xml->miseDeDepart->montant;
	    return $mdd;
	}	

	function loadXml_montantLiasse() {
		$mdl = $this->xml->liasses->montant;
	    return $mdl;
	}

	function loadXml_tps() {
	 	$tps = $this->xml->tempsDeReflexion->duree;
	    return $tps;   
	}

	function loadXml_mode() {
	 	$mdj = $this->xml->modeDeJeu->mode;
	    return $mdj;   
	}	
}