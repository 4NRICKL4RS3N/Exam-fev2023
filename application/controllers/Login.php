<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function sign_up() {
		$this->load->view('signup');
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	public function log_control() {
		$mail = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		$this->load->model('model_login');
		$this->load->model('model_user');
		// $f = $this->model_login->checkLogin($mail, $mdp);
		// var_dump($id);
		if ($this->model_login->checkLogin($mail, $mdp) === true) {
			$id = $this->model_user->getIdByMail($mail);
			$this->session->set_userdata('mail',$mail);
			$this->session->set_userdata('id',$id['idUser']);
			redirect('accueil/index');
		} else {
			redirect('login/index');
		}
	}
}
?>
