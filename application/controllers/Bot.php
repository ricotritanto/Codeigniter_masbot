<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bot extends CI_Controller {

	public function __construct() {
	parent::__construct();		
		// $this->load->library('session');
	if($this->session->userdata('bahasa'))
	{
		$this->config->set_item('language','indonesia');
	}
		$this->load->model('bot_model');
		$this->load->helper(array('url','form'));
	}

	public function index()
	{
		// $data['work'] = $this->bot_model->Getwork();
		// $data['contact'] = $this->bot_model->GetContact();
		
		$this->load->view('index');
	}

	function about()
	{
		$data['about'] = $this->bot_model->GetAbout();
		$data['contact'] = $this->bot_model->GetContact();
		$this->load->view('layout/head');
		$this->load->view('about',$data);
		$this->load->view('layout/footer',$data);

	}


	function contact()
	{
		$data['contact'] = $this->bot_model->GetContact();
		$this->load->view('layout/head');
		$this->load->view('contact');
		$this->load->view('layout/footer',$data);
	}

}
