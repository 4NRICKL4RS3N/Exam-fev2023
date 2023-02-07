<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function log_control() {
		$mail = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		$this->load->model('model_login');
		// $f = $this->model_login->checkLogin($mail, $mdp);
		// var_dump($f) ;
		if ($this->model_login->checkLogin($mail, $mdp) === true) {
			$this->session->set_userdata('mail',$mail);
			redirect('accueil/index');
		} else {
			redirect('login/index');
		}
	}
}
