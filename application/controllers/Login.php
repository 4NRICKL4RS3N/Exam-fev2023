<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function log_control() {
		$mail = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		// var_dump($mail);
		// var_dump($mdp);
		$this->load->model('model_login');
		$f = $this->model_login->checkLogin($mail, $mdp);
		var_dump($f) ;
		if ($this->model_login->checkLogin($mail, $mdp) === true) {
			$this->load->view('accueil');
		} else {
			redirect('login/index');
		}
	}
}
