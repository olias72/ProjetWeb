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
		$this->load->view('classement');
	}

	public function theme()
	{
		$data['theme'] = $this->jeu_model->theme();
		$nb_theme = count($data['theme']->result());
		$data['id_theme_1'] = rand(1, $nb_theme);
		$data['id_theme_2'] = rand(1, $nb_theme);
		while ($data['id_theme_1'] == $data['id_theme_2']) {
			$data['id_theme_2'] = rand(1, $nb_theme);
		}
		$this->load->view('theme', $data);
	}

	public function questionnaire()
	{
		$data['question'] = $this->jeu_model->question($_POST['theme']);
		//$nb_question = count($data['questions']->result());
		//$data['question'] = rand(1, $nb_question);
		//$data['reponse'] = $this->jeu_model->reponse($data['question']['id']);
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
