<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inscription extends CI_Controller {
	
	public function index()
    {
        $nom = $this->input->post('nom');
        $mail = $this->input->post('mail');
        $mdp = $this->input->post('mdp');
        $this->load->model('model_inscription');
        $this->model_inscription->addUser($nom,$mail,$mdp);
        redirect('login/index');
    }
}
?>