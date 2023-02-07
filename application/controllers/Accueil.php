<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {
	
	public function index()
    {
        $data = array();
        $this->load->model('model_Objet');
        $data['mail'] = $this->session->userdata('mail');
        $data['listObjet'] = $this->model_Objet->getAllObjet();
        $this->load->view('accueil',$data);
    }
}
?>