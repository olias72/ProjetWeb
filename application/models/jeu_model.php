<?php 

Class Jeu_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function theme() {

	}

	function question() {
		$query = $this->db->get('question');
		return $query;
	}

	function classement() {
		
	}

	function reponse($id) {
		$this->db->select('reponse.intitule', 'reponse.id_reponse');
		$this->db->from('reponse');
		$this->db->join('question', 'reponse.question_id = question.id_question');
		$this->db->where('reponse.question_id', $id);
		$query = $this->db->get();
		return $query;
	}
}