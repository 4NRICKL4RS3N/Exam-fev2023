<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	
	public function index()
    {
        $data = array();
        $this->load->model('model_Objet');
        $data['mail'] = $this->session->userdata('mail');
        $data['id'] = $this->session->userdata('id');
        $data['categories'] = $this->model_Objet->getCategories();
        $data['content'] = 'accueil';
        // echo $this->session->userdata('id');
        $this->load->view('pages/content', $data);
    }
}
?>  