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
		$data['fromModel'] = $this->jeu_model->classement();
		$data['result'] = [10,24,54];
		$this->load->view('classement', $data);
	}

	public function theme()
	{
		$this->load->view('theme');
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
