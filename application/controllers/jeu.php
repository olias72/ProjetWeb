<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jeu extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('jeu_model');
		$this->load->view('header');
		$this->load->view('navBar');
		$this->load->view('footer');
	}

	public function index()
	{

	}

	public function inscription()
	{
		$this->load->view('inscription');
	}

	public function classement()
	{
		$this->load->view('classement', $data);
	}

	public function theme()
	{
		$this->load->view('theme');
	}

	public function questionnaire()
	{
		$data['question'] = $this->jeu_model->question();
		$nb_question = count($data['question']->result());
		$data['id_question'] = rand(1, $nb_question );
		$data['reponse'] = $this->jeu_model->reponse($data['id_question']);
		$this->load->view('questionnaire', $data);
	}

	public function admin()
	{
		$this->load->model('xml_model');
		$data['mdd'] = $this->xml_model->loadXml_montantDep();
		$data['mdl'] = $this->xml_model->loadXml_montantLiasse();
		$data['tps'] = $this->xml_model->loadXml_tps();
		$data['mdj'] = $this->xml_model->loadXml_mode();
		$this->load->view('admin', $data);
	}
}
