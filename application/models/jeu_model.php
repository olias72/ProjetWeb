<?php 

Class Jeu_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function theme() {
		$query = $this->db->get('theme');
		return $query;
	}

	function question($id) {
		$this->db->select('question.intitule, question.id_question');
		$this->db->from('question');
		$this->db->join('theme', 'question.theme_id = theme.id_theme');
		$this->db->where('question.theme_id', $id);
		$query = $this->db->get();
		return $query;
	}

	function reponse($id) {
		$this->db->select('reponse.intitule', 'reponse.id_reponse');
		$this->db->from('reponse');
		$this->db->join('question', 'reponse.question_id = question.id_question');
		$this->db->where('reponse.question_id', $id);
		$query = $this->db->get();
		return $query;
	}

	function classement() {
		
	}

	
}