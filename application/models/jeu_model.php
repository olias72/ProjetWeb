<?php 

Class Jeu_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function classement() {
		//$query = db->get();
		$query = 78;
		return $query;
	}
}